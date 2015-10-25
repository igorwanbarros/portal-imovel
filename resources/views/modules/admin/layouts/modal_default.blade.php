<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close"
					data-dismiss="modal"
					aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title" id="myModalLabel">
                @if(isset($title))
                    {{$title}}
                @endif
			</h4>
		</div>
		<!-- fim do modal-header -->
		<div class="modal-body">
            @yield('modal-body')
		</div>
		<!-- fim do modal-body -->
		<!-- <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		</div> -->
	</div>
	<!-- fim do modal-content -->
</div>
<!-- fim do modal -->
