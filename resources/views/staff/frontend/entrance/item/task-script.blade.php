<script>
    $(function() {

        // 【搜索】
        $(".item-main-body").on('click', ".filter-submit", function() {
            $('#datatable_ajax').DataTable().ajax.reload();
        });
        // 【重置】
        $(".item-main-body").on('click', ".filter-cancel", function() {
            $('textarea.form-filter, input.form-filter, select.form-filter').each(function () {
                $(this).val("");
            });

//            $('select.form-filter').selectpicker('refresh');
            $('select.form-filter option').attr("selected",false);
            $('select.form-filter').find('option:eq(0)').attr('selected', true);

            $('#datatable_ajax').DataTable().ajax.reload();
        });
        // 【查询】回车
        $(".item-main-body").on('keyup', ".item-search-keyup", function(event) {
            if(event.keyCode ==13)
            {
                $("#filter-submit").click();
            }
        });




        // 【下载二维码】
        $("#item-main-body").on('click', ".item-download-qr-code-submit", function() {
            var that = $(this);
            window.open("/download/qr-code?type=item&id="+that.attr('data-id'));
        });

        // 【数据分析】
        $("#item-main-body").on('click', ".item-statistic-submit", function() {
            var that = $(this);
            window.open("/admin/statistic/statistic-item?id="+that.attr('data-id'));
//            window.location.href = "/admin/statistic/statistic-item?id="+that.attr('data-id');
        });

        // 【编辑】
        $(".item-option").on('click', ".task-edit-this", function() {
            var $this = $(this);
            var $item_option = $this.parents('.item-option');
            window.location.href = "/item/task-edit?item-id="+$item_option.attr('data-item-id');
        });

        // 【删除】
        $(".main-content-container").off("click",".task-delete-this").on('click', ".task-delete-this", function() {
            var $this = $(this);
            var $item_option = $this.parents('.item-option');

            layer.msg('确定要"删除"么？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    $.post(
                        "{{ url('/item/task-delete') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "item-delete",
                            item_id: $item_option.attr('data-item-id')
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.closeAll();
                                $item_option.replaceWith(data.data.item_html);
                            }
                        },
                        'json'
                    );
                }
            });
        });

        // 【恢复】
        $(".main-content-container").off("click",".task-restore-this").on('click', ".task-restore-this", function() {
            var $this = $(this);
            var $item_option = $this.parents('.item-option');

            layer.msg('确定要"恢复"么？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    $.post(
                        "{{ url('/item/task-restore') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "item-restore",
                            item_id: $item_option.attr('data-item-id')
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.closeAll();
                                $item_option.replaceWith(data.data.item_html);
                            }
                        },
                        'json'
                    );
                }
            });
        });

        // 【永久删除】
        $(".main-content-container").off("click",".task-delete-permanently-this").on('click', ".task-delete-permanently-this", function() {
            var $this = $(this);
            var $item_option = $this.parents('.item-option');

            layer.msg('确定要"永久删除"么？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    $.post(
                        "{{ url('/item/task-delete-permanently') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "item-delete-permanently",
                            item_id: $item_option.attr('data-item-id')
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                $item_option.remove();
                            }
                        },
                        'json'
                    );
                }
            });
        });

        // 【发布】
        $(".main-content-container").off("click",".task-publish-this").on('click', ".task-publish-this", function() {
            var $this = $(this);
            var $item_option = $this.parents('.item-option');

            layer.msg('确定要"发布"么？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    $.post(
                        "{{ url('/item/task-publish') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "item-publish",
                            item_id: $item_option.attr('data-item-id')
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.closeAll();
                                $item_option.replaceWith(data.data.item_html);
                            }
                        },
                        'json'
                    );
                }
            });
        });

        // 【完成】
        $(".main-content-container").off("click",".task-complete-this").on('click', ".task-complete-this", function() {
            var $this = $(this);
            var $item_option = $this.parents('.item-option');

            layer.msg('确认"完成"？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){

                    $.post(
                        "/item/task-complete",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: 'item-complete',
                            item_id: $item_option.attr('data-item-id'),
                            type: 1
                        },
                        function(data){
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.closeAll();
                                $item_option.replaceWith(data.data.item_html);
                            }
                        },
                        'json'
                    );

                }
            });


        });

        // 【启用】
        $(".main-content-container").on('click', ".item-enable-submit", function() {
            var $this = $(this);
            var $item_option = $this.parents('.item-option');

            layer.msg('确定"启用"？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    $.post(
                        "{{ url('/admin/item/item-admin-enable') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "item-enable",
                            item_id: $item_option.attr('data-item-id')
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.closeAll();
                                $item_option.replaceWith(data.data.item_html);
                            }
                        },
                        'json'
                    );
                }
            });
        });
        // 【禁用】
        $(".main-content-container").on('click', ".item-disable-submit", function() {
            var $this = $(this);
            var $item_option = $this.parents('.item-option');

            layer.msg('确定"禁用"？', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    $.post(
                        "{{ url('/admin/item/item-admin-disable') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "item-disable",
                            item_id: $item_option.attr('data-item-id')
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.closeAll();
                                $item_option.replaceWith(data.data.item_html);
                            }
                        },
                        'json'
                    );
                }
            });
        });




        /*
         * 批量操作
         */
        // 【批量操作】全选or反选
        $(".main-list-body").on('click', '#check-review-all', function () {
            $('input[name="bulk-id"]').prop('checked',this.checked);//checked为true时为默认显示的状态
        });

        // 【批量操作】
        $(".main-list-body").on('click', '#operate-bulk-submit', function() {
            var $checked = [];
            $('input[name="bulk-id"]:checked').each(function() {
                $checked.push($(this).val());
            });

            layer.msg('确定"批量审核"么', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){

                    $.post(
                        "{{ url('/admin/item/item-operate-bulk') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "operate-bulk",
                            bulk_keyword_id: $checked,
                            bulk_keyword_status:$('select[name="bulk-operate-status"]').val()
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                $('#datatable_ajax').DataTable().ajax.reload(null,false);
                            }
                        },
                        'json'
                    );

                }
            });

        });

        // 【批量删除】
        $(".main-list-body").on('click', '#delete-bulk-submit', function() {
            var $checked = [];
            $('input[name="bulk-id"]:checked').each(function() {
                $checked.push($(this).val());
            });

            layer.msg('确定"批量删除"么', {
                time: 0
                ,btn: ['确定', '取消']
                ,yes: function(index){

                    $.post(
                        "{{ url('/admin/item/item-delete-bulk') }}",
                        {
                            _token: $('meta[name="_token"]').attr('content'),
                            operate: "item-delete-bulk",
                            bulk_keyword_id: $checked
                        },
                        function(data){
                            layer.close(index);
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                $('#datatable_ajax').DataTable().ajax.reload(null,false);
                            }
                        },
                        'json'
                    );

                }
            });

        });




        // 内容【获取详情】
        $("#item-main-body").on('click', ".item-detail-show", function() {
            var that = $(this);
            var $data = new Object();
            $.ajax({
                type:"post",
                dataType:'json',
                async:false,
                url: "{{ url('/admin/item/item-get') }}",
                data: {
                    _token: $('meta[name="_token"]').attr('content'),
                    operate:"item-get",
                    id:that.attr('data-id')
                },
                success:function(data){
                    if(!data.success) layer.msg(data.msg);
                    else
                    {
                        $data = data.data;
                    }
                }
            });
            $('input[name=id]').val(that.attr('data-id'));
            $('.item-user-id').html(that.attr('data-user-id'));
            $('.item-username').html(that.attr('data-username'));
            $('.item-title').html($data.title);
            $('.item-content').html($data.content);
            if($data.attachment_name)
            {
                var $attachment_html = $data.attachment_name+'&nbsp&nbsp&nbsp&nbsp'+'<a href="/all/download-item-attachment?item-id='+$data.id+'">下载</a>';
                $('.item-attachment').html($attachment_html);
            }
            $('#modal-body').modal('show');

        });






    });
</script>