<div class="site site-branding has-slogan">{* div.inner provides margins *}
    <div class="inner">
        <a href="/">
            {if Site::resolvePath('site-root/img/logo.png')}
                <img class="site-logo" src="{versioned_url 'img/logo.png'}" height=80 alt="{Slate::$schoolName|escape}">
            {elseif Site::resolvePath('site-root/apple-touch-icon.png')}
                <img class="site-icon" src="{versioned_url '/apple-touch-icon.png'}" width=36 alt="{Slate::$schoolName|escape}">
            {/if}
            <div class="text">
                <big class="site-name">{Slate::$schoolName|escape}</big>
            {if Slate::$siteSlogan}
                <small class="site-slogan">{Slate::$siteSlogan|escape}</small>
            {/if}
            </div>
        </a>
    </div>
</div>

<div style="padding: 1em; background-color: yellow; text-align: center; font-weight: bold;">
    This site is a preview of the next major version of Slate, it is synchronized to the live database nightly so <u>any changes you make here will be lost</u>.
</div>