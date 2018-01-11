<h1>Exacoin data to json</h1>
<h4>You need to run either index.php or json.php to get the data from the cloud.</h4>
<p>if the index or json.php is open in browser it will automatically download the new json data from the database!</p>
<p>for advanced users the script ai.js is getting the data from the cloud, use it for your own script.</p>
<p><i><b>I am not responsible for the script useage.</b></i></p>
<br>
<br>
<p>sample output:</p><br>
<pre>
{
	"date": "1112018",
	"time": "234511",
	"price_exa": "$3.04",
	"btc_exa": "0.00022635",
	"eth_exa": "0.00232622",
	"24_low": "$2.67",
	"24_high": "$3.38",
	"24_vol": "$548,686.56"
}
</pre>

<p>File structure:</p>
<ul>
  <li>ai.js - exacoin official file, extracts data from database</li>
  <li>index.php - a nice view for viewing the data</li>
  <li>general.json - the current json</li>
  <li>log.txt - all logged json in a single file</li>
  <li>json.php - output the json, you can use it in your own code</li>
  <li>insert.php - nothing to run, just php to put the json from database in general.json and log.txt</li>
</ul>
