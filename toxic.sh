out="$1"
echo "$out" > /var/www/prodtalk-private/test.txt
python3 /var/www/prodtalk-private/isCommentToxic.py <<< "$out" && exit 0 || exit 1