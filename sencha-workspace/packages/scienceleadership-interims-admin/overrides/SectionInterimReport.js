Ext.define('ScienceLeadership.interims.overrides.SectionInterimReport', {
    override: 'Slate.model.progress.SectionInterimReport'
}, function(Report) {
    Report.addFields([
        {
            name: 'Grade',
            type: 'string',
            allowNull: true
        }
    ]);
});