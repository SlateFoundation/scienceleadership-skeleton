Ext.define('Scienceleadership.interims.overrides.InterimsController', {
    override: 'SlateAdmin.controller.progress.interims.Report',

    init: function() {
        var me = this,
            editorForm,
            notesField,
            archivedNotesField;

        me.callParent();

        me.on('beforereportload', function(report) {
            var isHtml = report.get('NotesFormat') == 'html';

            if (!editorForm) {
                editorForm = me.getEditorForm().getForm();
                notesField = editorForm.findField('Notes');
                archivedNotesField = editorForm.findField('ArchivedNotes');
            }

            notesField.setHidden(isHtml);
            archivedNotesField.setHidden(!isHtml);
            archivedNotesField.setValue(isHtml ? report.get('Notes') : null);
        });
    },

    syncFormButtons: function() {
        var me = this,
            editorForm = me.getEditorForm(),
            report = editorForm.getRecord();

        if (report && report.get('NotesFormat') == 'html') {
            me.getRevertChangesBtn().setDisabled(true);
            me.getSaveDraftBtn().setDisabled(true);
            me.getSaveFinishedBtn().setDisabled(true);
        } else {
            me.callParent();
        }
    },

    syncStudent: function(student) {
        this.callParent(arguments);

        var report = student.get('report');

        student.set('report_grade', report ? report.get('Grade') : null, { dirty: false });
    }
});