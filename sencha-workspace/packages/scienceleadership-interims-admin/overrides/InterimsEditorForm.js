Ext.define('ScienceLeadership.interims.overrides.InterimsEditorForm', {
    override: 'SlateAdmin.view.progress.interims.EditorForm',
    requires: [
        'Ext.form.field.ComboBox',
        'Ext.form.field.Display'
    ],

    initComponent: function() {
        var me = this;

        me.items = Ext.Array.insert(Ext.Array.clone(me.items), 1, [{
            xtype: 'combobox',
            name: 'Grade',
            fieldLabel: 'Current Grade',
            labelAlign: 'left',
            store: ['A', 'B', 'C', 'D', 'F', 'N/A']
        },{
            xtype: 'displayfield',
            name: 'ArchivedNotes',
            fieldLabel: 'Comments (archived)',
            labelAlign: 'top',
            hidden: true
        }]);

        me.callParent(arguments);
    }
});