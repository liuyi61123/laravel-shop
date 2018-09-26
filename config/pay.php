<?php
return [
    'alipay' => [
        'app_id'         => '2016073000122448',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA5EMUPmsFnYConzeFZi1V3Je8t3lfCl8QlYIA+FbjwDW0s2mPxeShF5d0Ci/AEc2yoPmtn+hBcnGS/8ztVZfAVmfHEutcsdO0iXzi7yu4RTA2rGc6y9GO/ygWyaDqY15p9t3ARcVW4uyEkIgGmXEwxwMrblv6PgAiHB0rjo+MRHM+iGlw34CGhQN7+f0dsxV5HkdScxK+ZsPkbWhScTInZGtDzbP/3RhW9RgwqimCyW6kkUGCU+ULm0B5eOz1xxeeJq8llWutBn/R5YqhIisAul0hWSrsmjiyNp01vh+1SweAmLPH9QAOMLBB5aRpH8Da0tqKx3WFuxpvUXlbPQp+ewIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA5EMUPmsFnYConzeFZi1V3Je8t3lfCl8QlYIA+FbjwDW0s2mPxeShF5d0Ci/AEc2yoPmtn+hBcnGS/8ztVZfAVmfHEutcsdO0iXzi7yu4RTA2rGc6y9GO/ygWyaDqY15p9t3ARcVW4uyEkIgGmXEwxwMrblv6PgAiHB0rjo+MRHM+iGlw34CGhQN7+f0dsxV5HkdScxK+ZsPkbWhScTInZGtDzbP/3RhW9RgwqimCyW6kkUGCU+ULm0B5eOz1xxeeJq8llWutBn/R5YqhIisAul0hWSrsmjiyNp01vh+1SweAmLPH9QAOMLBB5aRpH8Da0tqKx3WFuxpvUXlbPQp+ewIDAQABAoIBAHDQ8oVzEcBpoW2n3EfG6mPvnvczhpSyrZinO2GCWGhcYuY1qziMqk3lrhWGyjBCcSH8pSKegRJWLeg92aNvMEHEYvDn4NWHI/i7/9Fj01xm2u7UyouIFFvp7XFUFeRs+oRnzyrswOfBLDfe8xwNhKUn3ORbk0/ncvRgOnHoYtRFDlFmCRJP1b7pXpJ1gVMeKsdgTXJT5OSHtiF29H1nW6iz85pE3rcJGJ9o9Fbm51mGizCq0JTnwO7ph5ZdK7g5vD141ikpAICa20MI2XjFlzM3IywBmubnbu7IwN7fZaUnH425qHWusNvisfLy4S2rwQNLoWIu/RLqAX6VhUp1kLkCgYEA9BYfQCfxUb8lQ+DpRC7TFxHEeJAd6AhcZQnYb2CYANj1/t6HNTmj4hXDnfHevafJ9yVnZPAVFBRtntWW2JOeIkWVmPeC9X22oKLVfxBBwmPbkaNcPP1yJshEOK+Syr+DW8SYJhkuiBauCXFk1ooI5k2RrXdKteav2K53qxSngQcCgYEA72c66MT02gkgFR5lXAVjunfY03bHioQlc4pP2IjerkMQ1H+TJiUo2uLHk/Iw0C1RRlfVJD6PlDT205bJo0mbw+rcJH06IgEpA8DkkMKvxyPRmKnkCKwQ6MjeOi1Q/wa9infFPw4haE0Vi7QoJVTU+qMzsZnK6uBFWB+08FuD3e0CgYA/SuU7m5/l1KzzFwUl2wZ9uuu5X5WBr3lV8eGfr+p6fcf8GPPyh0nJvF8HO8rIXxPt9FMFR4QPuuRaBYSiEFU3Cdgq3DOnOLv8l3zJAAwtPfuXnkaywf2xtMiL8mscC+EiEK5rYqhAPbFPXYoKX6zDG2YlFwPWe0Up6MO7JxXwTQKBgQCuuHJf606fykUl5Jco/633KvyN6IRc7XC/0FPRvqJ2H/AqhikIj9ovVY8+xGUnqctFQVkHKLl0+uqhJc1nZJNP+xpLbzF8G8ipOqAVnmDXP6b6ehM42QtGOUMmxmf0mCDA7ASCrndnPcrZuNQL2svNWEqj9ZAIt0EkvY86VC/7SQKBgEAEWoqRU3zbMw3hl+u6852mtbN1lEspcpqw5XTTPE0iFiSbab/hiyBPyRA+1ohiLuEn8Y48sKqrlGuSLspKPUjC6VbsE5Yo2/oJNykzXlA6ITibv70S9NMrQCZ7D4/7MkIwh9HmAlU9oojVZ9RGtRqAK8/2ci2nhdP7Jd3KVWyk',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];