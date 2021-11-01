1. `sudo apt install bluealsa`

2. `sudo systemctl start bluealsa`

3. `sudo apt install mpd mpc`

4. `mv mpd.conf /etc/mpd.conf`

5. `systemctl restart mpd`

6. `mpc update`

7. `mpd add <something from /home/pi/music>`

8. installing docker, if run into a problem, `sudo reboot`

9. install web server and PHP - `sudo apt-get install nginx php-fpm`

10. `ln -s ./nginx/default /etc/ngingx/sites-available/default`

11. if getting lecture about admin on sudo in `index.php`:
`/etc/sudoers.d` - create a new file or copy the pi's file and put in this:
`www-data ALL=(ALL) NOPASSWD: ALL`

12. change `index.php` include frame to the IP of raspberry

13. create a `.mac` file in the root (next to this `README.md`) with the MAC adress of the bluetooth speaker
