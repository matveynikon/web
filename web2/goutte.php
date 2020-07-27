$baseURL = 'http://saf33r.com/';
        $urlEndpoint = 'resources/scrape-this-page.html';

        $domSelector = '//*[@id="points"]/li/p';

        $crawler = $goutte->request('GET', $baseURL . $urlEndpoint);

        $results = $crawler->filterXPath($domSelector)->each(function ($node, $i) {
            return $node->nodeValue;	// This is a DOMElement Object
        });

        var_dump($results);