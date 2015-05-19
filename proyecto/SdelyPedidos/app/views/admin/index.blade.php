<?php
/*
 * Página inicio del administrador
 */
?>

@extends('layouts.admin')
@section('estilos')
@stop
@section('scripts')
@stop
@section('contenido')
		
					<div class="row">
						<div class="span6">
							<div class="widget widget-nopad">
								<div class="widget-header"> <i class="icon-list-alt"></i>
									<h3>Datos del día</h3>
								</div>
								<!-- /widget-header -->
								<div class="widget-content">
									<div class="widget big-stats-container">
										<div class="widget-content">
											<h6 class="bigstats">
												Aenean eget posuere orci, sed eleifend magna. Nam et ex in nulla tempus pretium a vitae turpis. Duis efficitur sollicitudin massa, in interdum nunc ultricies at.
											</h6>
											<div id="big_stats" class="cf">
												<div class="stat"> <i class="icon-anchor"></i> <span class="value">851</span> </div>
												<!-- .stat -->

												<div class="stat"> <i class="icon-thumbs-up-alt"></i> <span class="value">423</span> </div>
												<!-- .stat -->

												<div class="stat"> <i class="icon-twitter-sign"></i> <span class="value">922</span> </div>
												<!-- .stat -->

												<div class="stat"> <i class="icon-bullhorn"></i> <span class="value">25%</span> </div>
												<!-- .stat --> 
											</div>
										</div><!-- /widget-content --> 
									</div>
								</div>
							</div><!-- /widget -->
						</div><!-- /span6 -->
						<div class="span6">
							<div class="widget">
								<div class="widget-header"> <i class="icon-signal"></i>
									<h3>Pedidos en la semana</h3>
								</div>
								<div class="widget-content">
									<canvas id="area-chart" class="chart-holder" height="250" width="538"> </canvas>
									<!-- /area-chart --> 
								</div><!-- /widget-content --> 
							</div><!-- /widget -->
						</div><!-- /span6 --> 
					</div><!-- /row --> 

		<script>

			var lineChartData = {
				labels: ["Lun", "Mar", "Mie", "Jue", "Vie", "Sab", "Dom"],
				datasets: [
					{
						fillColor: "rgba(220,220,220,0.5)",
						strokeColor: "rgba(220,220,220,1)",
						pointColor: "rgba(220,220,220,1)",
						pointStrokeColor: "#fff",
						data: [65, 59, 90, 81, 56, 55, 40]
					},
					{
						fillColor: "rgba(151,187,205,0.5)",
						strokeColor: "rgba(151,187,205,1)",
						pointColor: "rgba(151,187,205,1)",
						pointStrokeColor: "#fff",
						data: [28, 48, 40, 19, 96, 27, 100]
					}
				]

			}

			var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


			var barChartData = {
				labels: ["January", "February", "March", "April", "May", "June", "July"],
				datasets: [
					{
						fillColor: "rgba(220,220,220,0.5)",
						strokeColor: "rgba(220,220,220,1)",
						data: [65, 59, 90, 81, 56, 55, 40]
					},
					{
						fillColor: "rgba(151,187,205,0.5)",
						strokeColor: "rgba(151,187,205,1)",
						data: [28, 48, 40, 19, 96, 27, 100]
					}
				]

			}

			$(document).ready(function () {
				var date = new Date();
				var d = date.getDate();
				var m = date.getMonth();
				var y = date.getFullYear();
				var calendar = $('#calendar').fullCalendar({
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay'
					},
					selectable: true,
					selectHelper: true,
					select: function (start, end, allDay) {
						var title = prompt('Event Title:');
						if (title) {
							calendar.fullCalendar('renderEvent',
									{
										title: title,
										start: start,
										end: end,
										allDay: allDay
									},
							true // make the event "stick"
									);
						}
						calendar.fullCalendar('unselect');
					},
					editable: true,
					events: [
						{
							title: 'All Day Event',
							start: new Date(y, m, 1)
						},
						{
							title: 'Long Event',
							start: new Date(y, m, d + 5),
							end: new Date(y, m, d + 7)
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d - 3, 16, 0),
							allDay: false
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d + 4, 16, 0),
							allDay: false
						},
						{
							title: 'Meeting',
							start: new Date(y, m, d, 10, 30),
							allDay: false
						},
						{
							title: 'Lunch',
							start: new Date(y, m, d, 12, 0),
							end: new Date(y, m, d, 14, 0),
							allDay: false
						},
						{
							title: 'Birthday Party',
							start: new Date(y, m, d + 1, 19, 0),
							end: new Date(y, m, d + 1, 22, 30),
							allDay: false
						},
						{
							title: 'EGrappler.com',
							start: new Date(y, m, 28),
							end: new Date(y, m, 29),
							url: 'http://EGrappler.com/'
						}
					]
				});
			});
		</script><!-- /Calendar -->
@stop