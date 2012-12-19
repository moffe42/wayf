<?php
$config = array(
    'kalmar' => array(
        'feedurl' => 'http://kalmar2.org/simplesaml/module.php/aggregator/?id=kalmarcentral2&set=saml20-sp-remote&exclude=denmark&mimetype=application/xml',
        'validate.signature' => true,
        'validate.certificate' => 'MIIC+zCCAmSgAwIBAgIJALIv7VqXanQYMA0GCSqGSIb3DQEBBQUAMF0xCzAJBgNVBAYTAk5PMRIwEAYDVQQIEwlUcm9uZGhlaW0xEjAQBgNVBAcTCVRyb25kaGVpbTEQMA4GA1UEChMHVU5JTkVUVDEUMBIGA1UEAxMLa2FsbWFyMi5vcmcwHhcNMDkxMDI2MDY1OTQyWhcNMTkxMDI2MDY1OTQyWjBdMQswCQYDVQQGEwJOTzESMBAGA1UECBMJVHJvbmRoZWltMRIwEAYDVQQHEwlUcm9uZGhlaW0xEDAOBgNVBAoTB1VOSU5FVFQxFDASBgNVBAMTC2thbG1hcjIub3JnMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCi7bEwud2nKm9FSojyIFGXN1p2ZGpUOKSFxhmeicCujHQr1VYUhyXBDHONwPDtK9PdHFZ4lLgLKcAIqUcOoAWr65m/MJJVkX0P7TUTZ6OS4mDAo1NsZexZxTBof9hCwnFz9dbqEThqZw2UtyEDnhW6kCb6SBd+2Yjvd+YDZg8lfwIDAQABo4HCMIG/MB0GA1UdDgQWBBS2Sw/w4drjYrTiAHeWXyN2W1j1iDCBjwYDVR0jBIGHMIGEgBS2Sw/w4drjYrTiAHeWXyN2W1j1iKFhpF8wXTELMAkGA1UEBhMCTk8xEjAQBgNVBAgTCVRyb25kaGVpbTESMBAGA1UEBxMJVHJvbmRoZWltMRAwDgYDVQQKEwdVTklORVRUMRQwEgYDVQQDEwtrYWxtYXIyLm9yZ4IJALIv7VqXanQYMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADgYEALx5V6xKtPr7urC/QOWiHxUChQO+SJsbnlwIquwaEGgUf0WrGidPu04zdv+VpKtR+/KZbIDuSWx0/AkbexiE9ZUzJ2GvdVSxr/uON9CtQIQTp5WjZD0KaieaoIMy/w5shc+trjkV550g/MWFFqAjproXwHRrEQoAxWL0smtR1R/I=',
        'notification.email' => 'jach@wayf.dk',
    ),
    'edugain' => array(
        'feedurl' => 'http://mds.edugain.org/',
        'validate.signature' => true,
        'validate.certificate' => 'MIIC1DCCAbygAwIBAgIETCJV1DANBgkqhkiG9w0BAQUFADAsMQ4wDAYDVQQKEwVHRUFOVDEaMBgGA1UEAxMRZWR1R0FJTiBTaWduZXIgQ0EwHhcNMTAwNjIzMTg0MzMyWhcNMTQwODAxMTg0MzMyWjAsMQ4wDAYDVQQKEwVHRUFOVDEaMBgGA1UEAxMRZWR1R0FJTiBTaWduZXIgQ0EwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCRfl1zhkaFveJvJtS03bRIO3k77q2s5m+c6sQ83j71rIad+vGCO29S4JHBXHI/U57yNbNLgoKzl0MI4WQrs4KT/y+LPMFB9M0lNrALQd/op6PNc7CWKMN1yV8V/L74/vapRlb90gPVJABHmoAfQmjyMXLW38KLwzK1qEpKUIxPBfQMBawmh0gC2T5ndZndcMPpgsMXyG2AZ4QGSOt4tgpspjTSRY++X+gi9WUuWzsEHHdFhCR9UYQ6+1glMVheJjVmoD0b9V/KQ0BF/1zry2jfWlchFeILlWbWgiWsIBA4BPNHqFW42qGgUr9DI3FzRLHXqF2N2f592tzcTeDZ11ejAgMBAAEwDQYJKoZIhvcNAQEFBQADggEBAGC8iCKBUzmNIhikaCImp8WIMoI9VMYf/iBGcovaujRW85BmVfE0qj2yG2BfuA8RkxX7wayvb6znA7HSuQHpdVoI6poPbaW5ynZy35G3pzKs7dyZo6oGivE1Cj7PqJHXLICJin3pKWGfHLkkYa64B32pXy7t42Rlvn2uog5MEYCgo4jnfhxnw0iPFJTHEy3x/PJ5Yxe5o/fDIUXtbIb0R0Z6Tym34YsUQQvmT11vfPPsFVc6Nkda0xo2DBxaPfw3ieTojimmnToPLFJL9DEEWKSSrIZQYYrop0ftnQRhkFiu2TMYXiIiwKgLXKz7VybtcIMjt/tClNsDWTlIxwwFnNo=',
    ),    
);
