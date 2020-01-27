Ext.define('ScienceLeadership.interims.overrides.InterimsStudentsGrid', {
    override: 'SlateAdmin.view.progress.interims.StudentsGrid',


    initComponent: function() {
        var me = this;

        me.columns = Ext.Array.insert(Ext.Array.clone(me.columns), 1, [{
            text: 'Grade',
            dataIndex: 'report_grade',
            emptyCellText: '&mdash;',
            width: 70
        }]);

        me.callParent(arguments);
    }
});