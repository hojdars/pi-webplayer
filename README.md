# Pi Bluetooth Web Player

A (kind of scuffed) web player for bluetooth speakers to be used with *MPD* and CYP running through `docker-compose`.

See the `confs` folder for the configurations you will need to set this up.

0. `sudo apt update && sudo apt upgrade` (optionally reboot now, if the raspberry is new, avoids the reboot at step 8)

1. `sudo apt install bluealsa`

2. `sudo systemctl start bluealsa`

3. `sudo apt install mpd mpc`

4. `cp confs/mpd.conf /etc/mpd.conf`

5. `systemctl restart mpd`

6. `mpc update`

7. `mpd add <something from /home/pi/music>`

8. installing docker, if you run into a problem, `sudo reboot`

9. install web server and PHP - `sudo apt-get install nginx php-fpm`

10. `ln -s ./nginx/default /etc/ngingx/sites-available/default`

11. if you are getting lecture about admin on sudo in `index.php`:
`/etc/sudoers.d` - create a new file or copy the pi's file and put in this:
`www-data ALL=(ALL) NOPASSWD: ALL`

12. remove the default nginx index from `/var/www/html`, then do a `ln -s ./html /var/www/html` to host our site, change `index.php` include frame to the IP of raspberry (instead of the 192.168.0.128)

13. create a `.mac` file in the root (next to this `README.md`) with the MAC adress of the bluetooth speaker
