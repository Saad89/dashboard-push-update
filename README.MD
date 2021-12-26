
{
  "collerys": {
    "registrationsToday": "121",
    "visitorsToday": "30432",
    "visitors": [
      {
        "age": 29,
        "name": "muster man",
        "surname": "muster von muenster"
      },
      {
        "age": 45,
        "name": "muster kind",
        "surname": "muster von dortmund"
      }
    ]
  },
  "duftz": {
    "registrationsToday": "435",
    "visitorsToday": "234",
    "visitors": [
      {
        "age": 29,
        "name": "muster man",
        "surname": "muster von muenster"
      },
      {
        "age": 45,
        "name": "muster kind",
        "surname": "muster von dortmund"
      }
    ]
  },
  "belegbote": {
      "registrationsToday": "54",
      "visitorsToday": "2433",
      "visitors": [
        {
          "age": 29,
          "name": "muster man",
          "surname": "muster von muenster"
        },
        {
          "age": 45,
          "name": "muster kind",
          "surname": "muster von dortmund"
        }
      ]
},
  "greetix": {
    "registrationsToday": "77",
    "visitorsToday": "98797",
    "visitors": [
      {
        "age": 29,
        "name": "muster man",
        "surname": "muster von muenster"
      },
      {
        "age": 45,
        "name": "muster kind",
        "surname": "muster von dortmund"
      }
    ]
  }
}

{"collerys":{"registrationsToday":"121","visitorsToday":"30432","visitors":[{"age":29,"name":"muster man","surname":"muster von muenster"},{"age":45,"name":"muster kind","surname":"muster von dortmund"}]},"duftz":{"registrationsToday":"435","visitorsToday":"234","visitors":[{"age":29,"name":"muster man","surname":"muster von muenster"},{"age":45,"name":"muster kind","surname":"muster von dortmund"}]},"belegbote":{"registrationsToday":"54","visitorsToday":"2433","visitors":[{"age":29,"name":"muster man","surname":"muster von muenster"},{"age":45,"name":"muster kind","surname":"muster von dortmund"}]},"greetix":{"registrationsToday":"77","visitorsToday":"98797","visitors":[{"age":29,"name":"muster man","surname":"muster von muenster"},{"age":45,"name":"muster kind","surname":"muster von dortmund"}]}}
curl -X POST localhost:8080/webhook/1e9 --data '{"collerys":{"registrationsToday":"121","visitorsToday":"30432","visitors":[{"age":29,"name":"muster man","surname":"muster von muenster"},{"age":45,"name":"muster kind","surname":"muster von dortmund"}]},"duftz":{"registrationsToday":"435","visitorsToday":"234","visitors":[{"age":29,"name":"muster man","surname":"muster von muenster"},{"age":45,"name":"muster kind","surname":"muster von dortmund"}]},"belegbote":{"registrationsToday":"54","visitorsToday":"2433","visitors":[{"age":29,"name":"muster man","surname":"muster von muenster"},{"age":45,"name":"muster kind","surname":"muster von dortmund"}]},"greetix":{"registrationsToday":"77","visitorsToday":"98797","visitors":[{"age":29,"name":"muster man","surname":"muster von muenster"},{"age":45,"name":"muster kind","surname":"muster von dortmund"}]}}'
