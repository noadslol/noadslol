@echo off
if not "%1"=="am_admin" (powershell start -verb runas '%0' am_admin & exit /b)
title (INSTALLING) No Ads Lol
echo Entering XAMPP directory...
cd C:/xampp
echo Entered directory.
echo Deleting current htdocs folder (if exists)...
IF EXIST C:\xampp\htdocs RMDIR /S /Q C:\xampp\htdocs
echo Deleted folder (if it existed).
echo Downloading No Ads Lol via Git...
git clone https://github.com/noadslol/noadslol
echo Downloaded.
echo Renaming noadslol directory to htdocs...
ren C:\xampp\noadslol htdocs
echo Renamed to htdocs.
title (INSTALLED) No Ads Lol
echo.
echo.
echo No Ads Lol has been installed! Please open XAMPP and start the Apache service to start No Ads Lol. Then, you can access it at http://localhost.
pause
exit
