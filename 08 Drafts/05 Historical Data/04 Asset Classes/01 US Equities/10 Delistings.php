<?
$imgLink = "https://cdn.quantconnect.com/i/tu/history-deslisting-dataframe-us-equities.png";
$dataTypeLink = "/docs/v2/writing-algorithms/securities/asset-classes/us-equity/corporate-actions#05-Delistings";
?>

<p class='csharp'>
  To get historical <a href='<?=$dataTypeLink?>'>delisting data</a>, call the <code>History&lt;Delisting&gt;</code> method with an asset's <code>Symbol</code>.
</p>

<p class='python'>
  To get historical <a href='<?=$dataTypeLink?>'>delisting data</a>, call the <code>history</code> method with the <code>Delisting</code> type and an asset's <code>Symbol</code>.
  This method returns a DataFrame with columns for the old symbol and new symbol during each change.
</p>

<div class="section-example-container">
    <pre class="csharp">// Get the deslistings of an asset over the last 10 years. 
var history = History&lt;Delisting&gt;(symbol, TimeSpan.FromDays(10*365);</pre>
    <pre class="python"># Get the deslistings of an asset over the last 10 years in DataFrame format.
history = self.history(Delisting, symbol, timedelta(10*365))</pre>
</div>

<img class='python docs-image' src='<?=$imgLink?>' alt='DataFrame of historical symbol changes for a stock.'>

<p class='python'>To get a list of <code>Delisting</code> objects instead of a DataFrame, call the <code>history[Delisting]</code> method.</p>

<div class="python section-example-container">
    <pre class="python"># Get the deslistings of an asset over the last 10 years in Delisting format. 
history = self.history[Delisting](symbol, timedelta(10*365))</pre>
</div>