git config credential.helper store
git add .
git commit -m 'from server'
git pull
git push
docker build -t strongpapazola/ubuntu:bisa-design-old .
docker stop bisa-design-old
docker rm bisa-design-old
docker run -d -p 127.0.0.1:8093:443 --name bisa-design-old --restart always strongpapazola/ubuntu:bisa-design-old
docker push strongpapazola/ubuntu:bisa-design-old
