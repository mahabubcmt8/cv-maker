<script src="{{ asset('backend/vendor/libs/datepicker/datepicker.min.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js" defer></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" defer></script>

<script defer>
    $(document).ready(function() {
        // DatePicker
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
        // summernote
        $('#summernote').summernote({
            height: 150,
            placeholder: 'Write Something'
        });
        // dropify
        $('.dropify').dropify({
            messages: {
                'default': 'Upload File',
                'replace': 'Upload File',
                'remove':  'Remove',
                'error':   'Ooops, something wrong happended.'
            }
        });
        // Select 2
        $('.js-example-basic-single').select2();
    });
</script>
