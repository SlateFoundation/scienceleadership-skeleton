{if !$.cookies.username_reformatted_dismissed && $.User->LegacyUsername}
    <div class="well dismissible" data-dismissible-id="username_reformatted">
        <p>We've recently changed how student usernames are formatted. Your username is now: <strong><code>{$.User->Username|escape}</code></strong></p>
        <p>Your old username, <code>{$.User->LegacyUsername|escape}</code> will continue working in many places for now, but you may experience trouble
        using it in the future. Start getting the hang of using <strong><code>{$.User->Username|escape}</code></strong> instead.</p>
        <button class="primary dismiss-button">Got it, thanks!</button>
    </div>
{/if}