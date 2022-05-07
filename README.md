# No Ads Lol
## The new [redacted] client, coded in PHP.
## Screenshots
### Homepage
![Screenshot of homepage](https://github.com/noadslol/noadslol/blob/main/screenshots/home.png?raw=true)
### Search
![Screenshot of search](https://github.com/noadslol/noadslol/blob/main/screenshots/search.png?raw=true)
### Video Player
![Screenshot of video player](https://github.com/noadslol/noadslol/blob/main/screenshots/player.png?raw=true)
### Admin Panel
![Screenshot of admin panel](https://github.com/noadslol/noadslol/blob/main/screenshots/admin.png?raw=true)
## Install
### Windows
You will need [XAMPP](https://www.apachefriends.org/xampp-files/7.4.29/xampp-windows-x64-7.4.29-0-VC15-installer.exe) (XAMPP must be located in `C:/xampp`) and [Git](https://github.com/git-for-windows/git/releases/download/v2.36.0.windows.1/Git-2.36.0-32-bit.exe).

[Click here to download the installer.](https://rawcdn.githack.com/noadslol/noadslol/b02406b562f8e3235eea94124ef7c6ae4f3155f5/windowsInstaller.bat) If Windows Defender says `Windows Protected Your PC` (since No Ads Lol is unsigned), click the `More Info` link. A button labeled `Run Anyways` will appear click it.

Once installed, open XAMPP and start the Apache service. Then, you can [click here to access No Ads Lol](http://localhost).
### Other OSes
If you have installation directions for your OS, feel free to share! I'll add them here and give you credit so others can use No Ads Lol on their device.
## Notable Features
- Clean, nice-looking homepage that displays trending videos, music and news--all in one place
- A fully-functional search box to search for your favorite video or creator
- A nice video player that plays the raw version of the video (you can rightclick and download videos from the raw player)
- If the raw video player doesn't seem to load, No Ads Lol will detect this and throttle you to the Invidious player
- A pretty solid admin panel with plugins, custom script injection, ping test and terminal
## Questions and Answers
### Wait, is this a [redacted] client?
We don't talk about [redacted]! An old [redacted] client named [redacted] Vanced was taken down because it infridged the logo and branding of [redacted], which was copyrighted (according to the [Android Authority](https://www.androidpolice.com/vanced-developers-issue-statement-addressing-wild-rumors-about-the-apps-demise/)).

No Ads Lol avoids using the word [redacted], and I even designed the No Ads Lol logo so it can't be taken down for trademark as there is no trademark violation!
### This sounds too good to be true, is there a virus?
Of course not! Don't believe me? No Ads Lol is entirely open sourced on this repo, so you can see every line for yourself.
### What is Invidious throttling?
Invidious is another ad-free YouTube player. No Ads Lol tries its best to show the raw video directly (using maadhav-ytdl), however (very rarely) raw videos sometimes return a 403 forbidden error. Instead of not displaying the video at all, No Ads Lol checks for this error and (if the error is occurring) throttles you to Invidious and displays the video from the Invidious player instead of the raw No Ads Lol player.
