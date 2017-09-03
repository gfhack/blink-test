Blink framework
===================================================

[![Latest Stable Version](https://poser.pugx.org/blink/seed/v/stable)](https://packagist.org/packages/blink/seed)
[![Total Downloads](https://poser.pugx.org/blink/seed/downloads)](https://packagist.org/packages/blink/seed)
[![Latest Unstable Version](https://poser.pugx.org/blink/seed/v/unstable)](https://packagist.org/packages/blink/seed)


For more information, please visit our main development repo [here](https://github.com/bixuehujin/blink).

#Hello World...
Running 10s test @ http://127.0.0.1:8080/
  4 threads and 400 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency    13.37ms    7.14ms 122.01ms   88.20%
    Req/Sec     4.47k     2.03k    8.74k    52.75%
  178743 requests in 10.06s, 32.73MB read
  Socket errors: connect 151, read 11, write 0, timeout 0
Requests/sec:  17769.46
Transfer/sec:      3.25MB

#Listing all users...
Running 10s test @ http://127.0.0.1:8080/users/
  4 threads and 400 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency    65.97ms   36.30ms 264.36ms   83.81%
    Req/Sec     0.90k   632.48     2.09k    53.50%
  35984 requests in 10.09s, 111.94MB read
  Socket errors: connect 151, read 35, write 29, timeout 0
  Non-2xx or 3xx responses: 35984
Requests/sec:   3564.57
Transfer/sec:     11.09MB

#Math...
Running 10s test @ http://127.0.0.1:8080/compute/
  4 threads and 400 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency    58.40ms   26.59ms 273.75ms   80.62%
    Req/Sec     1.35k   307.82     1.97k    60.67%
  40364 requests in 10.02s, 125.57MB read
  Socket errors: connect 151, read 57, write 0, timeout 0
  Non-2xx or 3xx responses: 40364
Requests/sec:   4029.58
Transfer/sec:     12.54MB

License
-------

This is a open sourced software under MIT license.
