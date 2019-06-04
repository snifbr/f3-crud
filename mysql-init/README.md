# Executar comando abaixo:


```bash
oc new-app mysql:5.7~https://github.com/snifbr/f3-crud \
	--name mysql \
	--context-dir=. \
	--env MYSQL_DATABASE=test \
	--env MYSQL_USER=f3mvcadmin \
	--env MYSQL_PASSWORD=f3mvcadmin
```
