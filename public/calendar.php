<? include("header.php")?>

    <div class="page secondary">
        <div class="page-header">
            <div class="page-header-content">
                <h1>Calendar<small>demo</small></h1>
                <a href="/" class="back-button big page-back"></a>
            </div>
        </div>

        <div class="page-region">
            <div class="page-region-content">
                <h2>Calendar</h2>
                <p>This component in progress...</p>

                <div class="grid">
                    <div class="row">
                        <div class="span4">
                            <div class="calendar span4" data-role="calendar" data-param-lang="en"></div>
                            <p><code>data-param-lang="en"</code></p>
                        </div>
                        <div class="span4">
                            <div class="calendar span4" data-role="calendar" data-param-lang="ru" data-param-init-date="1972-12-21"></div>
                            <p>
                                <code>data-param-lang="ru"</code>
                                <br />
                                <code>data-param-init-date="1972-12-21"</code>
                            </p>
                        </div>
                    </div>
                </div>




<pre class="prettyprint linenums">
    &lt;div class="<b>calnedar</b>" data-role="<b>calendar</b>"&gt;&lt;/div&gt;
</pre>


                <h2>Date Picker</h2>
                <p>This component in progress...</p>
                <div class="input-control text datepicker span4" data-param-lang="ru">
                    <input type="text" />
                    <button class="btn-date"></button>
                </div>
<pre class="prettyprint linenums">
    &lt;div class="input-control text <b>datepicker</b>" data-role="<b>datepicker</b>"&gt;
        &lt;input type="text" /&gt;
        &lt;button class="btn-date"&gt;&lt;/button&gt;
    &lt;/div&gt;
</pre>

            </div>
        </div>
    </div>

<? include("footer.php")?>