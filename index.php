<?php

    $technologies = array(
        'SAML',
        'JSON-LD',
        'RDF',
        'SOAP',
        'IMAP',
        '.NET',
        'LDAP',
        'SSO',
        'WebID',
		'Ethereum',
		'ERC20',
		'Blockchain',
		'Smart contracts',
		'NFT',
		'IPFS',
		'GraphQL',
		'NLP',
		'ML',
		'Microservice Architecture',
		'Kubernetes',
		'React',
		'Node',
		'Web 3.0',
		'SFTP',
		'ETL',
    );

    $adjectives = array(
        'synergistic',
        'integrated',
        'human-centric',
        'knowledge-orientated',
        'content-centered',
        'holistic',
        'standards-based',
        'social',
        'use-case anchored',
		'decentralized',
		'cloud-native',
		'API-centric',
		'serverless',
		'next-gen',
    );

    function adjectiveString($adjectives, $link = ', ', $number = 3) {
        if ($number > sizeof($adjectives)) $number = sizeof($adjectives);
        $list = array();
        for ($i = 0; $i < $number; $i++) {
            $key = rand(0,sizeof($adjectives) - 1);
            $list[] = $adjectives[$key];
            unset($adjectives[$key]);
            $adjectives = array_values($adjectives);
        }
        return implode($link, $list);
    }

?>
<!doctype html>
<html>
    <head>
        <title>Fatberg: a modern enterprise collaboration toolkit</title>
    </head>
    <style>
        body {
            padding: 5em;
            font-family: helvetica, arial, sans-serif;
            font-size: 1.5em;
            line-height: 2em;
        }
    </style>
    <body>
        <h1>Fatberg</h1>
        <p>
            <?php
                $string = adjectiveString($adjectives);
                if (in_array(strtolower($string[0]), array('a','e','i','o','u'))) {
                    echo 'An ';
                } else {
                    echo 'A ';
                }
                echo $string;
            ?>
            cloud technology stack for enterprise.
        </p>
        <h2>
            <?php echo adjectiveString($technologies, ' + ', 5); ?>
        </h2>
        <p>
            <small><a href="#" onclick="location.reload()">Reload for more.</a></small>
        </p>
        <p style="margin-top: 10em; font-size: 0.5em">
            <a href="https://werd.io" style="text-decoration: none; color: #999" rel="author">This is Ben's fault.</a>
        </p>
    </body>
</html>