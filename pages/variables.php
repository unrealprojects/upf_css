<section class="Node">
    <h3 class="Underlined">Global</h3>
    <dl class="Horizontal">
        <dt>
            <code class="Inline">$Core-Grid-Enable</code>
        </dt>
        <dd>
            Enables or disables import of <code class="Inline">-grid.scss</code> file. Default value is <code class="Inline">true</code>.
            If you are using another grid generator, or don't need to use any grid &mdash; change it to <code class="Inline">false</code>
        </dd>
        <dt>
            <code class="Inline">$Core-Reset-Enable</code>
        </dt>
        <dd>
            Enables or disables import of <code class="Inline">-reset.scss</code> file. Default value is <code class="Inline">true</code>.
            UPFCSS is using this reset, so changing variable to <code class="Inline">false</code> will break some styles. Proceed with caution!
        </dd>
        <dt>
            <code class="Inline">$Global-Content-Spacing</code>
        </dt>
        <dd>
            Automatically splits all elements vertically, by using margin-top. Using "Lobotomized Owl" mixin. Default value is <code class="Inline">true</code>.
        </dd>
    </dl>
</section>
<section class="Node">
    <h3 class="Underlined">Typography</h3>
    <dl class="Horizontal">
        <dt>
            <code class="Inline">$Text-Size-Base</code>
        </dt>
        <dd>
            Defines base <code class="Inline">font-size</code>. All elements on the page will inherit from this variable.
        </dd>

        <dt>
            <code class="Inline">$Text-Size-Mobile</code>
        </dt>
        <dd>
            Defines base <code class="Inline">font-size</code> for mobile devices. All elements on the page will inherit from this variable, if viewport size is less than 768px.
        </dd>
    </dl>
</section>