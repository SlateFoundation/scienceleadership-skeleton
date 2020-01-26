{extends "progress/section-interim-reports/_body.email.tpl"}

{block fields}
    {if $Report->Grade}
        <div style="margin: 1em 0;">
            <span style="color: #5e6366; font-size: smaller; font-style: italic;">Current Grade</span>
            <br />
            <span style="display: block; margin-left: 1.5em;">
                <strong>{$Report->Grade}</strong>
            </span>
        </div>
    {/if}

    {$dwoo.parent}
{/block}