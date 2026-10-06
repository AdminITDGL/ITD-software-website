# deploy-live.ps1 — commit + push; GitHub Actions then makes it live on itdservices.in
# Usage:  .\deploy-live.ps1 "What I changed"
param([string]$Message = "Site update")

$ErrorActionPreference = "Stop"
Set-Location "C:\Users\Prashant\Desktop\ALL\ITD Software website\ITD_SOFTWARE_NEW\ITD_SOFTWARE_NEW"

git add -A
git diff --cached --quiet
if ($LASTEXITCODE -ne 0) { git commit -m $Message } else { Write-Host "Nothing new to commit." }
git push origin main
if ($LASTEXITCODE -ne 0) { throw "git push failed" }

Write-Host "Pushed. Live in ~20s - watch: https://github.com/AdminITDGL/ITD-software-website/actions"
