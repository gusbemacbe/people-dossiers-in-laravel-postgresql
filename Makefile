# Piltover Recruitment Registry Control Protocols

.PHONY: help start stop restart setup test clean shell logs

# Display available commands
help:
	@echo ""
	@echo "  « PILTOVER AND TERRA CONTROL TERMINAL »"
	@echo ""
	@echo "  make start    — Ignite the engines (backend detached + frontend watch)"
	@echo "  make stop     — Power down all systems"
	@echo "  make restart  — Cycle the power (stop + start)"
	@echo "  make setup    — Initialise the environment (build, install, migrate, seed)"
	@echo "  make test     — Execute the automated assurance protocols"
	@echo "  make clean    — Destroy all containers and volumes (factory reset)"
	@echo "  make shell    — Access the internal mainframe (Bash inside container)"
	@echo ""

# The primary command to run the environment
start:
	./vendor/bin/sail up -d && ./vendor/bin/sail npm run dev

# Stopping the containers without destroying data
stop:
	./vendor/bin/sail stop

# Quick restart
restart: stop start

# First-time installation script
setup:
	@echo "Initialising the Docker containers..."
	./vendor/bin/sail up -d
	@echo "Installing the PHP dependencies..."
	./vendor/bin/sail composer install
	@echo "Installing the JavaScript dependencies..."
	./vendor/bin/sail npm install
	@echo "Migrating and seeding the database..."
	./vendor/bin/sail artisan migrate:fresh --seed
	@echo "Setup complete. Systems nominal."

# Automatically fixing the code style issues using Laravel Pint
lint:
	./vendor/bin/sail php ./vendor/bin/pint

# Running the linter in «test» mode (shows errors without fixing them)

# Running the test suite
test:
	./vendor/bin/sail test

# Removing everything (containers, networks, volumes)
clean:
	./vendor/bin/sail down -v

# Entering the container
shell:
	./vendor/bin/sail shell

# Viewing the backend logs
logs:
	./vendor/bin/sail logs -f

# Exporting the project structure to a text file
tree:
	@echo "Generating the architecture map..."
	find . -maxdepth 3 -not -path '*/.*' -not -path './vendor*' -not -path './node_modules*' -not -path './storage*' | sort > structure.txt
	@echo "Map saved to 'structure.txt'"