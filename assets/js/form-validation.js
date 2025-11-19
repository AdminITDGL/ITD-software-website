/**
 * Unified Form Validation and W3Forms Submission Handler
 * Handles validation, loader alerts, and form submission for all forms
 */

(function($) {
    'use strict';

    // Validation rules and messages
    const validationRules = {
        required: {
            test: function(value) {
                return value.trim() !== '';
            },
            message: 'This field is required'
        },
        email: {
            test: function(value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(value);
            },
            message: 'Please enter a valid email address'
        },
        name: {
            test: function(value) {
                // Only letters, spaces, hyphens, and apostrophes allowed
                const nameRegex = /^[a-zA-Z\s\-'\.]+$/;
                return nameRegex.test(value.trim());
            },
            message: 'Name should only contain letters and spaces'
        },
        phone: {
            test: function(value) {
                // Remove all non-digit characters for validation
                const digitsOnly = value.replace(/\D/g, '');
                // Must have exactly 10 digits
                return digitsOnly.length === 10;
            },
            message: 'Please enter a valid 10-digit phone number'
        },
        minLength: function(min) {
            return {
                test: function(value) {
                    return value.trim().length >= min;
                },
                message: `This field must be at least ${min} characters long`
            };
        },
        maxLength: function(max) {
            return {
                test: function(value) {
                    return value.trim().length <= max;
                },
                message: `This field must not exceed ${max} characters`
            };
        }
    };

    /**
     * Show loader overlay
     */
    function showLoader() {
        // Remove existing loader if any
        const existingLoader = document.getElementById('form-loader-overlay');
        if (existingLoader) {
            existingLoader.remove();
        }

        const loader = document.createElement('div');
        loader.id = 'form-loader-overlay';
        loader.innerHTML = `
            <div class="form-loader-content">
                <div class="form-loader-spinner"></div>
                <p class="form-loader-text">Submitting your request...</p>
            </div>
        `;
        document.body.appendChild(loader);
        
        // Animate in
        setTimeout(() => {
            loader.classList.add('active');
        }, 10);
    }

    /**
     * Hide loader overlay
     */
    function hideLoader() {
        const loader = document.getElementById('form-loader-overlay');
        if (loader) {
            loader.classList.remove('active');
            setTimeout(() => {
                loader.remove();
            }, 300);
        }
    }

    /**
     * Show toast message for individual fields
     */
    function showToast(message, type = 'error', fieldName = '') {
        // Create unique ID for this toast
        const toastId = 'toast-' + Date.now() + '-' + Math.random().toString(36).substr(2, 9);
        
        const toast = document.createElement('div');
        toast.id = toastId;
        toast.className = `form-toast form-toast-${type}`;
        
        // Get field label if available
        let displayMessage = message;
        if (fieldName) {
            // Clean up field name (remove asterisks, extra spaces, etc.)
            let fieldLabel = fieldName.replace(/\*/g, '').trim();
            // Capitalize first letter
            fieldLabel = fieldLabel.charAt(0).toUpperCase() + fieldLabel.slice(1).replace(/_/g, ' ');
            displayMessage = `${fieldLabel}: ${message}`;
        }
        
        toast.innerHTML = `
            <div class="form-toast-content">
                <div class="form-toast-icon">
                    <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-exclamation-circle' : 'fa-info-circle'}"></i>
                </div>
                <div class="form-toast-message">
                    <span>${displayMessage}</span>
                </div>
                <button class="form-toast-close" onclick="const t=document.getElementById('${toastId}');if(t){t.classList.remove('active');setTimeout(()=>t.remove(),300);}">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;
        
        // Get existing toasts to calculate position
        const existingToasts = document.querySelectorAll('.form-toast');
        const toastCount = existingToasts.length;
        
        // Calculate top position for stacking (20px base + 80px per toast)
        const topPosition = 20 + (toastCount * 80);
        toast.style.top = topPosition + 'px';
        
        document.body.appendChild(toast);
        
        // Animate in
        setTimeout(() => {
            toast.classList.add('active');
        }, 10);

        // Auto remove after 4 seconds
        setTimeout(() => {
            if (toast && toast.parentElement) {
                toast.classList.remove('active');
                setTimeout(() => {
                    if (toast.parentElement) {
                        toast.remove();
                        // Reposition remaining toasts
                        repositionToasts();
                    }
                }, 300);
            }
        }, 4000);
    }
    
    /**
     * Reposition all toasts after one is removed
     */
    function repositionToasts() {
        const toasts = document.querySelectorAll('.form-toast');
        toasts.forEach(function(toast, index) {
            toast.style.top = (20 + (index * 80)) + 'px';
        });
    }

    /**
     * Show alert message (for form-level messages)
     */
    function showAlert(message, type = 'success') {
        // Remove existing alert if any
        const existingAlert = document.getElementById('form-alert-message');
        if (existingAlert) {
            existingAlert.remove();
        }

        const alert = document.createElement('div');
        alert.id = 'form-alert-message';
        alert.className = `form-alert form-alert-${type}`;
        alert.innerHTML = `
            <div class="form-alert-content">
                <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
                <span>${message}</span>
                <button class="form-alert-close" onclick="this.parentElement.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;
        document.body.appendChild(alert);
        
        // Animate in
        setTimeout(() => {
            alert.classList.add('active');
        }, 10);

        // Auto remove after 5 seconds
        setTimeout(() => {
            if (alert && alert.parentElement) {
                alert.classList.remove('active');
                setTimeout(() => {
                    alert.remove();
                }, 300);
            }
        }, 5000);
    }

    /**
     * Show error message for a field (using toast notification)
     */
    function showError(field, message) {
        // Remove existing error first
        removeError(field);

        const formGroup = field.closest('.form-group');
        let container = formGroup;
        
        // If no form-group, use the field's parent (but not if it's a form or button container)
        if (!container) {
            const parent = field.parentElement;
            // Make sure we're not appending to a form or button container
            if (parent && parent.tagName !== 'FORM' && !parent.classList.contains('btn-form-submit')) {
                container = parent;
            } else {
                // Create a wrapper if needed
                container = field.parentElement;
            }
        }

        if (container) {
            container.classList.add('has-error');
        }

        // Add error class to field
        field.classList.add('error');
        
        // Show toast notification instead of inline error
        const fieldName = field.getAttribute('name') || field.getAttribute('id') || '';
        const fieldLabel = field.closest('.form-group')?.querySelector('label')?.textContent?.replace(/\*/g, '').trim() || fieldName;
        showToast(message, 'error', fieldLabel);
        
        // Add visual error indicator (red border) - no inline text
        // The toast will handle the message display
    }

    /**
     * Remove error message from a field
     */
    function removeError(field) {
        const formGroup = field.closest('.form-group');
        const container = formGroup || field.parentElement;
        
        if (container) {
            container.classList.remove('has-error');
        }

        field.classList.remove('error');
        
        // Remove error messages that are direct siblings or in the same container
        if (container) {
            const errorMessages = container.querySelectorAll('.error-message');
            errorMessages.forEach(function(errorMsg) {
                // Remove if it's a direct child of the container (near our field)
                if (errorMsg.parentElement === container || 
                    errorMsg.parentElement === field.parentElement) {
                    errorMsg.remove();
                }
            });
        }
        
        // Also check for error messages that are direct siblings of the field
        let sibling = field.nextSibling;
        while (sibling) {
            if (sibling.nodeType === 1 && sibling.classList && sibling.classList.contains('error-message')) {
                sibling.remove();
                break;
            }
            sibling = sibling.nextSibling;
        }
        
        // Check previous siblings too (in case error was inserted before)
        sibling = field.previousSibling;
        while (sibling) {
            if (sibling.nodeType === 1 && sibling.classList && sibling.classList.contains('error-message')) {
                sibling.remove();
                break;
            }
            sibling = sibling.previousSibling;
        }
    }

    /**
     * Validate a single field
     */
    function validateField(field) {
        const value = field.value.trim();
        const fieldType = field.type;
        const isRequired = field.hasAttribute('required');
        let isValid = true;

        // Remove previous errors
        removeError(field);

        // Check required
        if (isRequired && !validationRules.required.test(value)) {
            showError(field, validationRules.required.message);
            return false;
        }

        // Skip further validation if field is empty and not required
        if (!value && !isRequired) {
            return true;
        }

        // Email validation
        if (fieldType === 'email' && value) {
            if (!validationRules.email.test(value)) {
                showError(field, validationRules.email.message);
                isValid = false;
            }
        }

        // Name validation - check by name attribute or id containing "name"
        const fieldName = field.getAttribute('name') || field.getAttribute('id') || '';
        const isNameField = fieldName.toLowerCase().includes('name') && 
                           !fieldName.toLowerCase().includes('company') &&
                           !fieldName.toLowerCase().includes('subject');
        
        if (isNameField && fieldType === 'text' && value) {
            if (!validationRules.name.test(value)) {
                showError(field, validationRules.name.message);
                isValid = false;
            } else {
                // Check minimum length for name
                if (value.trim().length < 2) {
                    showError(field, 'Name must be at least 2 characters long');
                    isValid = false;
                }
            }
        }

        // Phone validation
        if (fieldType === 'tel' && value) {
            if (!validationRules.phone.test(value)) {
                showError(field, validationRules.phone.message);
                isValid = false;
            }
        }

        // Text validation (company, subject - not name)
        if (fieldType === 'text' && value && !isNameField) {
            const minLength = field.getAttribute('minlength');
            if (minLength && parseInt(minLength) > 0) {
                if (value.length < parseInt(minLength)) {
                    showError(field, `This field must be at least ${minLength} characters long`);
                    isValid = false;
                }
            } else if (value.length < 2) {
                showError(field, 'This field must be at least 2 characters long');
                isValid = false;
            }
        }

        // Textarea validation
        if (field.tagName === 'TEXTAREA' && value) {
            if (value.length < 10) {
                showError(field, 'Message must be at least 10 characters long');
                isValid = false;
            }
        }

        return isValid;
    }

    /**
     * Clear all error messages from a form
     */
    function clearAllFormErrors(form) {
        // Remove all error messages from the form
        const errorMessages = form.querySelectorAll('.error-message');
        errorMessages.forEach(function(errorMsg) {
            errorMsg.remove();
        });
        
        // Remove error classes from all fields
        const errorFields = form.querySelectorAll('.error');
        errorFields.forEach(function(field) {
            field.classList.remove('error');
        });
        
        // Remove has-error classes from containers
        const errorContainers = form.querySelectorAll('.has-error');
        errorContainers.forEach(function(container) {
            container.classList.remove('has-error');
        });
    }

    /**
     * Validate entire form
     */
    function validateForm(form) {
        // Clear all previous errors first
        clearAllFormErrors(form);
        
        const fields = form.querySelectorAll('input[required], textarea[required], select[required]');
        let isValid = true;

        fields.forEach(function(field) {
            if (!validateField(field)) {
                isValid = false;
            }
        });

        return isValid;
    }

    /**
     * Handle form submission
     */
    function handleFormSubmit(e) {
        e.preventDefault();
        
        const form = e.target;
        const submitButton = form.querySelector('button[type="submit"], input[type="submit"]');
        
        // Validate form
        if (!validateForm(form)) {
            // Scroll to first error
            const firstError = form.querySelector('.error');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstError.focus();
            }
            showAlert('Please fill in all required fields correctly', 'error');
            return false;
        }

        // Check if form has w3forms action
        const formAction = form.getAttribute('action');
        const isW3Forms = formAction && formAction.includes('web3forms');

        if (!isW3Forms) {
            showAlert('Form configuration error. Please contact support.', 'error');
            return false;
        }

        // Disable submit button to prevent double submission
        const originalButtonText = submitButton ? submitButton.innerHTML : '';
        if (submitButton) {
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
        }

        // Show loader
        showLoader();

        // Prepare form data
        const formData = new FormData(form);

        // Submit to W3Forms
        fetch('https://api.web3forms.com/submit', {
            method: 'POST',
            body: formData
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            hideLoader();
            
            if (data.success) {
                // Show success message
                showAlert('Thank you! Your message has been sent successfully.', 'success');
                
                // Reset form
                form.reset();
                
                // Set session token before redirecting
                const currentPath = window.location.pathname;
                const isLocationPage = currentPath.includes('/location/');
                const sessionPath = isLocationPage ? '../set-form-session.php' : 'set-form-session.php';
                
                // Get location from form data to determine which thank you page to redirect to
                const locationInput = form.querySelector('input[name="location"]');
                const location = locationInput ? locationInput.value : null;
                
                // Map location names to thank you page filenames
                const locationThankYouMap = {
                    'India': 'thank-you-india.php',
                    'Dubai': 'thank-you-dubai.php',
                    'USA': 'thank-you-usa.php',
                    'UK': 'thank-you-uk.php',
                    'Qatar': 'thank-you-qatar.php',
                    'Bahrain': 'thank-you-bahrain.php',
                    'Saudi Arabia': 'thank-you-saudi-arabia.php'
                };
                
                // Determine redirect path
                let redirectPath;
                if (isLocationPage && location && locationThankYouMap[location]) {
                    // Redirect to location-specific thank you page
                    redirectPath = locationThankYouMap[location];
                } else if (isLocationPage) {
                    // Fallback to generic thank you page for location pages
                    redirectPath = '../thank-you.php';
                } else {
                    // Main site thank you page
                    redirectPath = 'thank-you.php';
                }
                
                // Call PHP endpoint to set session
                fetch(sessionPath, {
                    method: 'GET',
                    credentials: 'same-origin'
                })
                .then(function(response) {
                    return response.json();
                })
                .then(function(sessionData) {
                    // Redirect to appropriate thank you page after setting session
                    window.location.href = redirectPath;
                })
                .catch(function(error) {
                    console.error('Session error:', error);
                    // Still redirect even if session setting fails
                    window.location.href = redirectPath;
                });
            } else {
                // Show error message
                const errorMsg = data.message || 'There was an error submitting the form. Please try again.';
                showAlert(errorMsg, 'error');
                
                // Re-enable submit button
                if (submitButton) {
                    submitButton.disabled = false;
                    submitButton.innerHTML = originalButtonText;
                }
            }
        })
        .catch(function(error) {
            hideLoader();
            console.error('Error:', error);
            showAlert('Network error. Please check your connection and try again.', 'error');
            
            // Re-enable submit button
            if (submitButton) {
                submitButton.disabled = false;
                submitButton.innerHTML = originalButtonText;
            }
        });

        return false;
    }

    /**
     * Initialize form validation and handlers
     */
    function initFormValidation() {
        // Add error styles and loader styles
        if (!document.getElementById('form-validation-styles')) {
            const style = document.createElement('style');
            style.id = 'form-validation-styles';
            style.textContent = `
                /* Error Styles */
                .banner-contact-form input.error,
                .banner-contact-form textarea.error,
                .banner-contact-form select.error,
                .contact__two-form input.error,
                .contact__two-form textarea.error,
                .contact__two-form select.error {
                    border-color: #e74c3c !important;
                    box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.1) !important;
                }
                .banner-contact-form input.error:focus,
                .banner-contact-form textarea.error:focus,
                .banner-contact-form select.error:focus,
                .contact__two-form input.error:focus,
                .contact__two-form textarea.error:focus,
                .contact__two-form select.error:focus {
                    border-color: #e74c3c !important;
                    box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.2) !important;
                }
                .error-message {
                    display: block;
                    color: #e74c3c;
                    font-size: 13px;
                    margin-top: 5px;
                    font-weight: 500;
                }
                .has-error input,
                .has-error textarea,
                .has-error select {
                    border-color: #e74c3c !important;
                }

                /* Loader Overlay Styles */
                #form-loader-overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.7);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    z-index: 99999;
                    opacity: 0;
                    transition: opacity 0.3s ease;
                }
                #form-loader-overlay.active {
                    opacity: 1;
                }
                .form-loader-content {
                    background: #ffffff;
                    padding: 40px 50px;
                    border-radius: 15px;
                    text-align: center;
                    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
                }
                .form-loader-spinner {
                    width: 50px;
                    height: 50px;
                    border: 4px solid #f3f3f3;
                    border-top: 4px solid var(--primary-color-1, #007bff);
                    border-radius: 50%;
                    animation: spin 1s linear infinite;
                    margin: 0 auto 20px;
                }
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
                .form-loader-text {
                    font-size: 16px;
                    color: #333;
                    font-weight: 500;
                    margin: 0;
                }

                /* Toast Notification Styles for Individual Fields */
                .form-toast {
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    z-index: 99998;
                    min-width: 320px;
                    max-width: 400px;
                    opacity: 0;
                    transform: translateX(400px);
                    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                    margin-bottom: 0;
                }
                .form-toast.active {
                    opacity: 1;
                    transform: translateX(0);
                }
                .form-toast-content {
                    background: #ffffff;
                    border-radius: 12px;
                    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
                    padding: 16px 20px;
                    display: flex;
                    align-items: flex-start;
                    gap: 12px;
                    border-left: 4px solid #e74c3c;
                    position: relative;
                    overflow: hidden;
                }
                .form-toast-content::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 4px;
                    height: 100%;
                    background: #e74c3c;
                }
                .form-toast-success .form-toast-content {
                    border-left-color: #27ae60;
                }
                .form-toast-success .form-toast-content::before {
                    background: #27ae60;
                }
                .form-toast-icon {
                    flex-shrink: 0;
                    width: 24px;
                    height: 24px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .form-toast-icon i {
                    font-size: 20px;
                    color: #e74c3c;
                }
                .form-toast-success .form-toast-icon i {
                    color: #27ae60;
                }
                .form-toast-message {
                    flex: 1;
                    display: flex;
                    align-items: center;
                    min-height: 24px;
                }
                .form-toast-message span {
                    font-size: 14px;
                    color: #333;
                    font-weight: 500;
                    line-height: 1.4;
                }
                .form-toast-close {
                    flex-shrink: 0;
                    background: none;
                    border: none;
                    cursor: pointer;
                    padding: 4px;
                    color: #999;
                    font-size: 14px;
                    transition: all 0.2s ease;
                    width: 24px;
                    height: 24px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 4px;
                }
                .form-toast-close:hover {
                    color: #333;
                    background: rgba(0, 0, 0, 0.05);
                }
                /* Stack multiple toasts */
                .form-toast:not(:last-child) {
                    margin-bottom: 10px;
                }
                @media (max-width: 767px) {
                    .form-toast {
                        top: 10px;
                        right: 10px;
                        left: 10px;
                        min-width: auto;
                        max-width: none;
                    }
                }

                /* Alert Styles (for form-level messages) */
                #form-alert-message {
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    z-index: 99998;
                    min-width: 300px;
                    max-width: 500px;
                    opacity: 0;
                    transform: translateX(400px);
                    transition: all 0.3s ease;
                }
                #form-alert-message.active {
                    opacity: 1;
                    transform: translateX(0);
                }
                .form-alert {
                    background: #ffffff;
                    border-radius: 10px;
                    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
                    overflow: hidden;
                }
                .form-alert-success {
                    border-left: 4px solid #27ae60;
                }
                .form-alert-error {
                    border-left: 4px solid #e74c3c;
                }
                .form-alert-content {
                    padding: 15px 20px;
                    display: flex;
                    align-items: center;
                    gap: 12px;
                }
                .form-alert-content i {
                    font-size: 20px;
                }
                .form-alert-success .form-alert-content i {
                    color: #27ae60;
                }
                .form-alert-error .form-alert-content i {
                    color: #e74c3c;
                }
                .form-alert-content span {
                    flex: 1;
                    font-size: 14px;
                    color: #333;
                    font-weight: 500;
                }
                .form-alert-close {
                    background: none;
                    border: none;
                    cursor: pointer;
                    padding: 5px;
                    color: #999;
                    font-size: 14px;
                    transition: color 0.3s ease;
                }
                .form-alert-close:hover {
                    color: #333;
                }
                @media (max-width: 767px) {
                    #form-alert-message {
                        top: 10px;
                        right: 10px;
                        left: 10px;
                        min-width: auto;
                        max-width: none;
                    }
                }
            `;
            document.head.appendChild(style);
        }

        // Attach validation to all forms with w3forms action
        // Select forms by action attribute first, then by class, then forms inside contact__two-form
        let formsArray = Array.from(document.querySelectorAll('form[action*="web3forms"]'));
        
        // Also get forms with banner-contact-form class
        const bannerForms = document.querySelectorAll('.banner-contact-form');
        bannerForms.forEach(function(form) {
            if (!formsArray.includes(form)) {
                formsArray.push(form);
            }
        });
        
        // Also get forms inside contact__two-form div
        const contactFormDivs = document.querySelectorAll('.contact__two-form');
        contactFormDivs.forEach(function(div) {
            const form = div.querySelector('form');
            if (form && !formsArray.includes(form)) {
                formsArray.push(form);
            }
        });
        
        // Remove duplicates
        formsArray = Array.from(new Set(formsArray));
        
        formsArray.forEach(function(form) {
            // Check if form has w3forms action
            const formAction = form.getAttribute('action');
            if (!formAction || !formAction.includes('web3forms')) {
                // Add w3forms action if missing
                form.setAttribute('action', 'https://api.web3forms.com/submit');
            }
            
            // Prevent default HTML5 validation
            form.setAttribute('novalidate', 'novalidate');
            
            // Remove any existing submit handlers
            const newForm = form.cloneNode(true);
            form.parentNode.replaceChild(newForm, form);
            
            // Add submit handler
            newForm.addEventListener('submit', handleFormSubmit);
            
            // Add real-time validation on blur and input restrictions
            const fields = newForm.querySelectorAll('input, textarea, select');
            fields.forEach(function(field) {
                const fieldType = field.type;
                const fieldName = field.getAttribute('name') || field.getAttribute('id') || '';
                const isNameField = fieldType === 'text' && 
                                  fieldName.toLowerCase().includes('name') && 
                                  !fieldName.toLowerCase().includes('company') &&
                                  !fieldName.toLowerCase().includes('subject');
                const isPhoneField = fieldType === 'tel' || 
                                   (fieldType === 'text' && fieldName.toLowerCase().includes('phone'));
                
                // Add input restrictions for name fields (only letters, spaces, hyphens, apostrophes)
                if (isNameField) {
                    field.addEventListener('keypress', function(e) {
                        // Allow special keys (backspace, delete, tab, escape, enter, arrow keys)
                        if (e.which === 8 || e.which === 9 || e.which === 27 || e.which === 13 || 
                            (e.which >= 37 && e.which <= 40) || e.which === 46) {
                            return;
                        }
                        const char = String.fromCharCode(e.which);
                        // Allow letters, spaces, hyphens, apostrophes, and periods
                        if (!/^[a-zA-Z\s\-'\.]$/.test(char)) {
                            e.preventDefault();
                        }
                    });
                    
                    field.addEventListener('input', function(e) {
                        // Remove any invalid characters that might have been pasted
                        const value = e.target.value;
                        const cleaned = value.replace(/[^a-zA-Z\s\-'\.]/g, '');
                        if (value !== cleaned) {
                            e.target.value = cleaned;
                        }
                        // Clear error on input
                        if (field.classList.contains('error')) {
                            removeError(field);
                        }
                    });
                }
                
                // Add input restrictions for phone fields (only numbers and formatting characters)
                if (isPhoneField) {
                    field.addEventListener('keypress', function(e) {
                        // Allow special keys (backspace, delete, tab, escape, enter, arrow keys)
                        if (e.which === 8 || e.which === 9 || e.which === 27 || e.which === 13 || 
                            (e.which >= 37 && e.which <= 40) || e.which === 46) {
                            return;
                        }
                        const char = String.fromCharCode(e.which);
                        // Allow numbers, spaces, hyphens, plus, parentheses
                        if (!/^[\d\s\-\+\(\)]$/.test(char)) {
                            e.preventDefault();
                        }
                    });
                    
                    field.addEventListener('input', function(e) {
                        // Remove any invalid characters that might have been pasted
                        const value = e.target.value;
                        const cleaned = value.replace(/[^\d\s\-\+\(\)]/g, '');
                        if (value !== cleaned) {
                            e.target.value = cleaned;
                        }
                        // Clear error on input
                        if (field.classList.contains('error')) {
                            removeError(field);
                        }
                    });
                }
                
                // For other fields, just clear error on input
                if (!isNameField && !isPhoneField) {
                    field.addEventListener('input', function() {
                        if (field.classList.contains('error')) {
                            removeError(field);
                        }
                    });
                }
                
                // Add validation on blur
                field.addEventListener('blur', function() {
                    validateField(field);
                });
            });
        });
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFormValidation);
    } else {
        initFormValidation();
    }

})(jQuery);
