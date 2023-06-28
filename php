#!/bin/sh

case $1 in

    on)
        echo "Restarting PHP daemon"
        sudo systemctl enable httpd
        sudo systemctl restart httpd
        echo "Success: Local PHP server running in /srv/http"
        ;;

    off)
        echo "Stopping and disabling PHP daemon"
        sudo systemctl stop httpd
        sudo systemctl disable httpd
        echo "Success: Local PHP server no longer running"
        ;;

    status)
        sudo systemctl status httpd
        ;;

    *)
        echo "Please supply subcommand (\`on\` or \`off\`)"
        ;;

esac
