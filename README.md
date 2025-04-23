# Podcast Platform API

A Laravel-based backend API for a podcast platform.

## Features

- RESTful API endpoints
- Authentication with Sanctum
- Pagination, sorting, and filtering
- Proper relationships between models
- Dockerized environment with Apache and phpMyAdmin

## Requirements

- Docker
- Docker Compose

## Installation

1. Clone the repository
2. Copy `.env.example` to `.env` and update database credentials
3. Run `docker-compose up -d`
4. Access the application at `http://localhost`
5. Access phpMyAdmin at `http://localhost:8080`

## API Documentation

Import the Postman collection from `docs/PodcastAPI.postman_collection.json`

## Database

The database will be automatically created when you run the containers. You can access it via phpMyAdmin.

## Testing

To run the tests:

```bash
docker-compose exec app php artisan test
