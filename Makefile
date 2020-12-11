default:
up: # this will put the containers into the background
	docker build -t my-custom-php .
	docker-compose up --remove-orphans &> /dev/null &

down:
	docker-compose down

upload:
	psql postgresql://postgres:example@localhost:5433/postgres -w -c "$(cat upload-db.sql)"

purge-db:
	psql postgresql://postgres:example@localhost:5433/postgres -w -c "$(cat drop.sql)"
