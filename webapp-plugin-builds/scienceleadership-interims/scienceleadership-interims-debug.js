Ext.define('Scienceleadership.interims.overrides.InterimsController', {override:'SlateAdmin.controller.progress.interims.Report', init:function() {
  var me = this, editorForm, notesField, archivedNotesField;
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
}, syncFormButtons:function() {
  var me = this, editorForm = me.getEditorForm(), report = editorForm.getRecord();
  if (report && report.get('NotesFormat') == 'html') {
    me.getRevertChangesBtn().setDisabled(true);
    me.getSaveDraftBtn().setDisabled(true);
    me.getSaveFinishedBtn().setDisabled(true);
  } else {
    me.callParent();
  }
}, syncStudent:function(student) {
  this.callParent(arguments);
  var report = student.get('report');
  student.set('report_grade', report ? report.get('Grade') : null, {dirty:false});
}});
Ext.define('ScienceLeadership.interims.overrides.InterimsEditorForm', {override:'SlateAdmin.view.progress.interims.EditorForm', requires:['Ext.form.field.ComboBox', 'Ext.form.field.Display'], initComponent:function() {
  var me = this;
  me.items = Ext.Array.insert(Ext.Array.clone(me.items), 1, [{xtype:'combobox', name:'Grade', fieldLabel:'Current Grade', labelAlign:'left', store:['A', 'B', 'C', 'D', 'F', 'N/A']}, {xtype:'displayfield', name:'ArchivedNotes', fieldLabel:'Comments (archived)', labelAlign:'top', hidden:true}]);
  me.callParent(arguments);
}});
Ext.define('ScienceLeadership.interims.overrides.InterimsStudentsGrid', {override:'SlateAdmin.view.progress.interims.StudentsGrid', initComponent:function() {
  var me = this;
  me.columns = Ext.Array.insert(Ext.Array.clone(me.columns), 1, [{text:'Grade', dataIndex:'report_grade', emptyCellText:'\x26mdash;', width:70}]);
  me.callParent(arguments);
}});
Ext.define('ScienceLeadership.interims.overrides.SectionInterimReport', {override:'Slate.model.progress.SectionInterimReport'}, function(Report) {
  Report.addFields([{name:'Grade', type:'string', allowNull:true}]);
});
