<p>The <code class="csharp">DataNormalizationMode</code><code class="python">data_normalization_mode</code> setting is an enumeration that defines how historical data is adjusted. This setting is only applicable for US Equities and Futures.

<h4>US Equities</h4>

<p>In the case of US Equities, the data normalization mode affects how historical data is adjusted for <a href='/docs/v2/writing-algorithms/securities/asset-classes/us-equity/corporate-actions'>corporate actions</a>. To view all the available options, see <a href='/docs/v2/writing-algorithms/securities/asset-classes/us-equity/requesting-data#11-Data-Normalization'>Data Normalization</a>. The default value is <code class="csharp">DataNormalizationMode.Adjusted</code><code class="python">DataNormalizationMode.ADJUSTED</code>. To change the data normalization mode, in the <a href='/docs/v2/writing-algorithms/initialization'>Initialize</a> method, adjust the algorithm's <code class="csharp">UniverseSettings</code><code class="python">universe_settings</code> before you add the universe.</p>

<div class="section-example-container">
    <pre class="csharp">// Pipe raw price data (unadjusted for splits and dividends) into the algorithm. 
// Equity Options require raw data and it improves the accuracy of modeling historical periods. 
UniverseSettings.DataNormalizationMode = DataNormalizationMode.Raw;
// Add a universe of the 50 most liquid US Equities.
AddUniverse(Universe.DollarVolume.Top(50));</pre>
    <pre class="python"># Pipe raw price data (unadjusted for splits and dividends) into the algorithm. 
# Equity Options require raw data and it improves the accuracy of modeling historical periods. 
self.universe_settings.data_normalization_mode = DataNormalizationMode.RAW
# Add a universe of the 50 most liquid US Equities.
self.add_universe(self.universe.dollar_volume.top(50))</pre>
</div>

<h4>Futures</h4>
<p>In the case of Futures, the data normalization mode affects how historical data of two contracts is stitched together to form the <a href='/docs/v2/writing-algorithms/universes/futures#12-Continous-Contracts'>continuous contract</a>. To view all the available options, see <a href='/docs/v2/writing-algorithms/securities/asset-classes/futures/requesting-data/individual-contracts#09-Data-Normalization'>Data Normalization</a>. The default value is <code class="csharp">DataNormalizationMode.Adjusted</code><code class="python">DataNormalizationMode.ADJUSTED</code>. To change the data normalization mode, in the <a href='/docs/v2/writing-algorithms/initialization'>Initialize</a> method, pass a <code class="csharp">dataNormalizationMode</code><code class="python">data_normalization_mode</code> argument to the <code class="csharp">AddFuture</code><code class="python">add_future</code> method.</p>

<div class="section-example-container">
    <pre class="csharp">// Set a specific data normalization mode for the continuous contract 
// with the dataNormalizationMode parameter of the AddFuture method.
AddFuture(Futures.Currencies.BTC, dataNormalizationMode: DataNormalizationMode.BackwardsRatio);</pre>
    <pre class="python"># Set a specific data normalization mode for the continuous contract 
# with the data_normalization_mode parameter of the add_future method.
self.add_future(Futures.Currencies.BTC, data_normalization_mode=DataNormalizationMode.BACKWARDS_RATIO)</pre>
</div>
