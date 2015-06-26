<?php
echo $this->Html->script('jquery');
echo $this->Html->css('beheerStyle');
echo $this->element('BeheerMenu'); 
?>

<script type='text/javascript'>
    $(function () {
        var chapters = [];

        function importChapters() {
            $("#log").append("Importing departments... ");
            $.ajax({
                method: "GET",
                dataType: "json",
                url: "<?= $this->Html->url(array('controller' => 'import', 'action' => 'importCustomsDuties', 'departments')); ?>",
                success: function (data) {
                    $("#log").append("DONE\n");
                    chapters = data;
                    importCodes(0);
                }
            })
        }

        function importCodes(index) {
            $("#log").scrollTop($("#log")[0].scrollHeight - $("#log").height());

            if (index < chapters.length) {
                $("#log").append("Importing chapter " + chapters[index] + "/" + chapters.length + "... ");
                $.ajax({
                    method: "GET",
                    dataType: "json",
                    url: "<?= $this->Html->url(array('controller' => 'import', 'action' => 'importCustomsDuties', 'chapters')); ?>/" + chapters[index],
                    success: function(data) {
                        $("#log").append("DONE (" + data.added + "|" + data.updated + ")\n");
                        importCodes(++index);
                    }
                });
            } else {
                $("#log").append("Finished importing!\n");
            }

        }

        importChapters();
    });
</script>
<textarea style="width: 55%;" id="log" cols="20" rows="20" disabled="disabled"></textarea>