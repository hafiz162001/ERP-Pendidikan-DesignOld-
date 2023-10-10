<?php if(1==2) { ?>
    <!-- Cara penggunaan CKEDITOR -->
<div class="centered">
    <div class="row">
        <div class="document-editor__toolbar"></div>
    </div>
    <div class="row row-editor">
        <div class="editor-container">
            <div class="editor" style="border: 1px solid #757575;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ad impedit molestiae dicta at deserunt aut officia illum totam eos asperiores quam omnis doloribus optio est dolores, sed ratione. Excepturi!
            </div>
        </div>
    </div>
</div>

<?php } ?>

<script>
	var editor;
    DecoupledDocumentEditor
				.create( document.querySelector( '.editor' ), {
					
				toolbar: {
					items: [
						'heading',
						'|',
						'fontSize',
						'fontFamily',
						'|',
						'fontColor',
						'fontBackgroundColor',
						'|',
						'bold',
						'italic',
						'underline',
						'strikethrough',
						'|',
						'alignment',
						'|',
						'numberedList',
						'bulletedList',
						'|',
						'outdent',
						'indent',
						'|',
						'todoList',
						'link',
						'blockQuote',
						'insertTable',
						'mediaEmbed',
						'|',
						'undo',
						'redo',
						'imageUpload'
					]
				},
				language: 'en',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:inline',
						'imageStyle:block',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells',
						'tableCellProperties',
						'tableProperties'
					]
				},
					licenseKey: '',
				})
				.then( editor => {
					window.editor = editor;
					editor = editor;
					// Set a custom container for the toolbar.
					document.querySelector( '.document-editor__toolbar' ).appendChild( editor.ui.view.toolbar.element );
					document.querySelector( '.ck-toolbar' ).classList.add( 'ck-reset_all' );
				} )
				.catch( error => {
					console.error( 'Oops, something went wrong!' );
					console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
					console.warn( 'Build id: bzhj04v2o3op-v1jug7ttv0dp' );
					console.error( error );
				} );
</script>