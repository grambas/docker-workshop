'use strict';

const express = require('express');

// Constants
const PORT = 8080;
const HOST = '0.0.0.0';

const axios = require('axios')

// App
const app = express();
app.get('/', (req, res) => {
  axios.get('http://php_app')
      .then(function (response) {
        // handle success
          console.log(response.data);
          res.send(
            'PHP Status: ' + response.data.status + '<br>' +
              'PHP time: ' + response.data.time + '<br>' +
              'Memcached version: ' + response.data.memcached_version
        );
        res.send();
      })
      .catch(function (error) {
        // handle error
        console.log(error);
      })
      .then(function () {
        // always executed
      });

});

app.listen(PORT, HOST);
console.log(`Running in container on http://${HOST}:${PORT}`);
