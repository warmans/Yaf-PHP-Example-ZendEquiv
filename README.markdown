# Benchmark #

To see the equivilent benchmart for Yaf see:

https://github.com/warmans/Yaf-PHP-Example

```
Server Software:        Apache/2.2.21
Server Hostname:        zend.dev
Server Port:            80

Document Path:          /
Document Length:        3314 bytes

Concurrency Level:      5
Time taken for tests:   34.743 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Total transferred:      3509000 bytes
HTML transferred:       3314000 bytes
Requests per second:    28.78 [#/sec] (mean)
Time per request:       173.716 [ms] (mean)
Time per request:       34.743 [ms] (mean, across all concurrent requests)
Transfer rate:          98.63 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.3      0       4
Processing:    80  173  20.3    168     303
Waiting:       79  169  20.5    163     294
Total:         80  174  20.4    168     303

Percentage of the requests served within a certain time (ms)
  50%    168
  66%    174
  75%    181
  80%    185
  90%    199
  95%    210
  98%    234
  99%    257
 100%    303 (longest request)
```