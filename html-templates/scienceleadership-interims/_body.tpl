{extends "progress/section-interim-reports/_body.tpl"}

{block fields}
    {if $Report->Grade}
        <div class="dli">
            <dt class="grade">Current Grade</dt>
            <dd class="grade">{$Report->Grade}</dd>
        </div>
    {/if}

    {$dwoo.parent}
{/block}