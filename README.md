# CVCFT.com Source

## Building the client:
**You must run the source at the root level of your web-directory with no other files or such.**

I have been running CVCFT.com on a 5$ a month LEMP server from [DigitalOcean](https://m.do.co/c/5a3259e06cb7). I would highly recommend them to anyone looking for a VPS.

You will need Python instaled on your computer. Please download it here: https://www.python.org/downloads/release/python-2711/

Steps for a Macintosh:

1. Go to personal-computer > template > data > master, and drag your JourneyMap raw .png files in here.
2. Open Terminal.app and type "cd" then hit the space-bar, then drag the data folder onto the window. Hit enter.
3. Now type "python" then hit the space-bar, then drag merge.py onto the window. Hit enter.
4. Go back to the "template" directory in Finder and on Terminal type "python" then hit the space-bar, then drag journeymap.py onto the window. Hit enter. This may take a while to complete.
5. When it is complete, go into public > tiles, hit Command-A (select all) and then Command-C (copy).
6. Now at the root directory, go to web > template > shardname > tiles, and Command-P (paste) them into the folder.
7. Edit index.php to your liking. No support will be given on this topic.
8. Go back one folder in finder and edit config.php to your liking.
9. Now drag the contents of the "web" folder into your web server (NOT THE web FOLDER ITSELF, the contents), and visit yourdomain.com/template/shardname. You should have a fully-functional web-map.

*Note: You can look in the other directories as an example. The teplate folders will be the only ones with instructions regarding them. Also, the contents of the personal-computer folder will stay on your personal computer, not be uploaded to the web.*

If this is confusing, please try Gipsy-Kings readme for the TXAPU.com client here: https://github.com/PieCrafted/civmap-client/blob/master/README.md

Please note that it is not made for my setup, but it goes into more detail about some things.

Also, please note, according to the license file, you are **NOT ALLOWED** to use the CVCFT.com brand in anyway whatsoever (including using the included images in the web > img folder.
