## Local Setup

Clone and open the project in your IDE.
### Requirements
1. Docker/Docker Compose
2. Git client

### How to Run?

The fast way to run the service is by executing below commands script from root folder of the repository:
```
docker-compose build
docker-compose up -d
```
> If you get the error `Can't connect to local MySQL server through socket` just run manually the db setup from in `install_server.sh` 

### How to destroy it?
```
docker-compose down
```

The dashboard Service is now ready to receive webhook updates requests.

Dashboard link `http://localhost:8080/dashboard`

webhook can be triggered as below:

```json
curl -X POST localhost:8080/webhook/1e9 --data '{"collerys":{"registrationsToday":"121","visitorsToday":"30432","visitors":[{"age":29,"name":"muster man","surname":"muster von muenster"},{"age":45,"name":"muster kind","surname":"muster von dortmund"}]},"duftz":{"registrationsToday":"435","visitorsToday":"234","visitors":[{"age":29,"name":"muster man","surname":"muster von muenster"},{"age":45,"name":"muster kind","surname":"muster von dortmund"}]},"belegbote":{"registrationsToday":"054","visitorsToday":"2433","visitors":[{"age":29,"name":"muster man","surname":"muster von muenster"},{"age":45,"name":"muster kind","surname":"muster von dortmund"}]},"greetix":{"registrationsToday":"77","visitorsToday":"987970","visitors":[{"age":29,"name":"muster man","surname":"muster von muenster"},{"age":45,"name":"muster kind","surname":"muster von dortmund"}]}}'
```

you can change the data and the dashbaord will be changed in client side without ajax or websockts
i used:

https://developer.mozilla.org/fr/docs/Web/API/Server-sent_events

https://symfony.com/blog/symfony-gets-real-time-push-capabilities

### How it works

i subscribed dashboard to a topic 1e9 and then when this topic is updated it use SSE to update all 
clients
![alt text](https://farm8.staticflickr.com/7851/32364925597_4fb026dd9b_o.png)

the  view from different clients

### mobile-view

![alt text](https://i.ibb.co/9HpYc3J/mobile-view.png)

### laptop-view

![alt text](https://i.ibb.co/ykXHN9W/laptop-view.png)

### tablet-view-with-flexbox

![alt text](https://i.ibb.co/rHT9kHX/tablet-view-with-flexbox.png)

### desktop-view

![alt text](https://i.ibb.co/DD7mfKY/desktop-view.png)
