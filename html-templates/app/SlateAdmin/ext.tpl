{extends app/slate-ext.tpl}

{block meta}
    {$title = "Manage Slate"}
    {$dwoo.parent}
{/block}

{block css-app}
    {cssmin fonts/font-awesome.css}
    {$dwoo.parent}
{/block}

{block js-app-local}
    {$dwoo.parent}
    <script type="text/javascript" src="{$App->getVersionedPath('packages/slate-sbg/build/slate-sbg.js')}"></script>
    <script type="text/javascript" src="{$App->getVersionedPath('packages/scienceleadership-narratives/build/scienceleadership-narratives.js')}"></script>
    <script type="text/javascript" src="{$App->getVersionedPath('packages/scienceleadership-interims/build/scienceleadership-interims.js')}"></script>
{/block}