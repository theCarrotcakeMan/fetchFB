<?php
/* @var $this FacebookDataController */
/* @var $model FacebookData */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idfacebook_data'); ?>
		<?php echo $form->textField($model,'idfacebook_data',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_anuncio'); ?>
		<?php echo $form->textField($model,'nombre_anuncio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entrega'); ?>
		<?php echo $form->textField($model,'entrega',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resultados'); ?>
		<?php echo $form->textField($model,'resultados',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indicador_resultados'); ?>
		<?php echo $form->textField($model,'indicador_resultados',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alcance'); ?>
		<?php echo $form->textField($model,'alcance',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_resultados'); ?>
		<?php echo $form->textField($model,'costo_resultados',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importe_gastado'); ?>
		<?php echo $form->textField($model,'importe_gastado',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'puntuacion_relevancia'); ?>
		<?php echo $form->textField($model,'puntuacion_relevancia',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personas_acciones'); ?>
		<?php echo $form->textField($model,'personas_acciones',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'me_gusta_pagina'); ?>
		<?php echo $form->textField($model,'me_gusta_pagina',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_cuenta'); ?>
		<?php echo $form->textField($model,'id_cuenta',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_cuenta'); ?>
		<?php echo $form->textField($model,'nombre_cuenta',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_anuncio'); ?>
		<?php echo $form->textField($model,'id_anuncio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'finalizacion'); ?>
		<?php echo $form->textField($model,'finalizacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clicks_boton'); ?>
		<?php echo $form->textField($model,'clicks_boton',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentaje_visualizacion_canvas'); ?>
		<?php echo $form->textField($model,'porcentaje_visualizacion_canvas',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiempo_visualizacion_canvas'); ?>
		<?php echo $form->textField($model,'tiempo_visualizacion_canvas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_campana'); ?>
		<?php echo $form->textField($model,'id_campana',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_campana'); ?>
		<?php echo $form->textField($model,'nombre_campana',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_conjunto_anuncios'); ?>
		<?php echo $form->textField($model,'id_conjunto_anuncios',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_conjunto_anuncios'); ?>
		<?php echo $form->textField($model,'nombre_conjunto_anuncios',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click_todos'); ?>
		<?php echo $form->textField($model,'click_todos',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_mejora_estimada'); ?>
		<?php echo $form->textField($model,'costo_mejora_estimada',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_cualquier_accion'); ?>
		<?php echo $form->textField($model,'costo_cualquier_accion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_click_unico'); ?>
		<?php echo $form->textField($model,'costo_click_unico',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpc_todos'); ?>
		<?php echo $form->textField($model,'cpc_todos',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpm_impresiones'); ?>
		<?php echo $form->textField($model,'cpm_impresiones',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_mil_personas'); ?>
		<?php echo $form->textField($model,'costo_mil_personas',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctr_todos'); ?>
		<?php echo $form->textField($model,'ctr_todos',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inicio_informe'); ?>
		<?php echo $form->textField($model,'inicio_informe',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fin_informe'); ?>
		<?php echo $form->textField($model,'fin_informe',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mejora_estimada_recuerdo'); ?>
		<?php echo $form->textField($model,'mejora_estimada_recuerdo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indice_mejora_estimada'); ?>
		<?php echo $form->textField($model,'indice_mejora_estimada',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frecuencia'); ?>
		<?php echo $form->textField($model,'frecuencia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'impreciones'); ?>
		<?php echo $form->textField($model,'impreciones',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comentarios_positivos'); ?>
		<?php echo $form->textField($model,'comentarios_positivos',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comentarios_negativos'); ?>
		<?php echo $form->textField($model,'comentarios_negativos',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proporcion_resultados'); ?>
		<?php echo $form->textField($model,'proporcion_resultados',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clics_sociales'); ?>
		<?php echo $form->textField($model,'clics_sociales',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'impresiones_sociales'); ?>
		<?php echo $form->textField($model,'impresiones_sociales',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alcance_social'); ?>
		<?php echo $form->textField($model,'alcance_social',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importe_gastado_hoy'); ?>
		<?php echo $form->textField($model,'importe_gastado_hoy',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'impresiones_en_bruto'); ?>
		<?php echo $form->textField($model,'impresiones_en_bruto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_total'); ?>
		<?php echo $form->textField($model,'valor_conversion_total',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acciones'); ?>
		<?php echo $form->textField($model,'acciones',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clics_unicos_todos'); ?>
		<?php echo $form->textField($model,'clics_unicos_todos',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctr_unicos_todos'); ?>
		<?php echo $form->textField($model,'ctr_unicos_todos',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctr_unico_porcentaje'); ?>
		<?php echo $form->textField($model,'ctr_unico_porcentaje',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clics_socilaes_unicos_todos'); ?>
		<?php echo $form->textField($model,'clics_socilaes_unicos_todos',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversiones_accion_aplicacion'); ?>
		<?php echo $form->textField($model,'valor_conversiones_accion_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_articulos_carrito_aplicacion'); ?>
		<?php echo $form->textField($model,'valor_conversion_articulos_carrito_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_artuculos_wishlist_aplicacion'); ?>
		<?php echo $form->textField($model,'valor_conversion_artuculos_wishlist_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_visualizacion_aplicacion'); ?>
		<?php echo $form->textField($model,'valor_conversion_visualizacion_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_pagos_iniciados_aplicacion'); ?>
		<?php echo $form->textField($model,'valor_conversion_pagos_iniciados_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_compras_aplicacion'); ?>
		<?php echo $form->textField($model,'valor_conversion_compras_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_calificaciones_unicas_aplicacion'); ?>
		<?php echo $form->textField($model,'valor_conversion_calificaciones_unicas_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_gastos_creditos_aplicacion'); ?>
		<?php echo $form->textField($model,'valor_conversion_gastos_creditos_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_gastos_creditos'); ?>
		<?php echo $form->textField($model,'valor_conversion_gastos_creditos',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_informacion_pago_no_internet'); ?>
		<?php echo $form->textField($model,'valor_conversion_informacion_pago_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversionarticulos_wishlist_no_internet'); ?>
		<?php echo $form->textField($model,'valor_conversionarticulos_wishlist_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_registros_no_internet'); ?>
		<?php echo $form->textField($model,'valor_conversion_registros_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_poagos_iniciados_no_internet'); ?>
		<?php echo $form->textField($model,'valor_conversion_poagos_iniciados_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_clientes_potenciales_no_internet'); ?>
		<?php echo $form->textField($model,'valor_conversion_clientes_potenciales_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_otro_tipo_no_internet'); ?>
		<?php echo $form->textField($model,'valor_conversion_otro_tipo_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_compras_no_internet'); ?>
		<?php echo $form->textField($model,'valor_conversion_compras_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_busquedas_no_internet'); ?>
		<?php echo $form->textField($model,'valor_conversion_busquedas_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_visualizacion_contenido_no_internet'); ?>
		<?php echo $form->textField($model,'valor_conversion_visualizacion_contenido_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_sitio_web'); ?>
		<?php echo $form->textField($model,'valor_conversion_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_informacion_pago_sitio_web'); ?>
		<?php echo $form->textField($model,'valor_conversion_informacion_pago_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_productos_carrito_sitio_web'); ?>
		<?php echo $form->textField($model,'valor_conversion_productos_carrito_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_articulos_wishlist_sitio_web'); ?>
		<?php echo $form->textField($model,'valor_conversion_articulos_wishlist_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_registros_completados_sitio_web'); ?>
		<?php echo $form->textField($model,'valor_conversion_registros_completados_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_pagos_iniciados_sitio_web'); ?>
		<?php echo $form->textField($model,'valor_conversion_pagos_iniciados_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_clientes_potenciales_sitio_web'); ?>
		<?php echo $form->textField($model,'valor_conversion_clientes_potenciales_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_compras_sitio_web'); ?>
		<?php echo $form->textField($model,'valor_conversion_compras_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_busquedas_sitio_web'); ?>
		<?php echo $form->textField($model,'valor_conversion_busquedas_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_visualizacion_contenido_sitio_web'); ?>
		<?php echo $form->textField($model,'valor_conversion_visualizacion_contenido_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_comversion_finalizacion_flujo_trabajo_facebook'); ?>
		<?php echo $form->textField($model,'valor_comversion_finalizacion_flujo_trabajo_facebook',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_conversion_compra_facxebook'); ?>
		<?php echo $form->textField($model,'valor_conversion_compra_facxebook',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acciones_aplicacion'); ?>
		<?php echo $form->textField($model,'acciones_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'logros_desbloqueados_aplicacion'); ?>
		<?php echo $form->textField($model,'logros_desbloqueados_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sessiones_aplicaciones'); ?>
		<?php echo $form->textField($model,'sessiones_aplicaciones',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'informacion_pago_agregada_aplicacion'); ?>
		<?php echo $form->textField($model,'informacion_pago_agregada_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'articulos_agregados_carrito_aplicacion'); ?>
		<?php echo $form->textField($model,'articulos_agregados_carrito_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'articulos_agregados_wishlist_aplicacion'); ?>
		<?php echo $form->textField($model,'articulos_agregados_wishlist_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registros_completados_aplicacion'); ?>
		<?php echo $form->textField($model,'registros_completados_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visualizacion_contenidos_aplicacion'); ?>
		<?php echo $form->textField($model,'visualizacion_contenidos_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagos_iniciados_aplicacion'); ?>
		<?php echo $form->textField($model,'pagos_iniciados_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'niveles_completados_aplicacion'); ?>
		<?php echo $form->textField($model,'niveles_completados_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compras_aplicacion'); ?>
		<?php echo $form->textField($model,'compras_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calificaciones_aplicacion'); ?>
		<?php echo $form->textField($model,'calificaciones_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'busquedas_aplicacion'); ?>
		<?php echo $form->textField($model,'busquedas_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gastos_creditos_aplicacion'); ?>
		<?php echo $form->textField($model,'gastos_creditos_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tutoriales_completados_aplicacion'); ?>
		<?php echo $form->textField($model,'tutoriales_completados_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acciones_otro_tipo_aplicacion'); ?>
		<?php echo $form->textField($model,'acciones_otro_tipo_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interaccion_aplicacion_computadora'); ?>
		<?php echo $form->textField($model,'interaccion_aplicacion_computadora',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'instalaciones_aplicacion_computadoras'); ?>
		<?php echo $form->textField($model,'instalaciones_aplicacion_computadoras',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interaccion_historia_aplicacion_computadoras'); ?>
		<?php echo $form->textField($model,'interaccion_historia_aplicacion_computadoras',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usos_aplicacion_computadoras'); ?>
		<?php echo $form->textField($model,'usos_aplicacion_computadoras',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visitas'); ?>
		<?php echo $form->textField($model,'visitas',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'solicitudes_ofertas'); ?>
		<?php echo $form->textField($model,'solicitudes_ofertas',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gastos_creditos'); ?>
		<?php echo $form->textField($model,'gastos_creditos',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'partidas_juegos'); ?>
		<?php echo $form->textField($model,'partidas_juegos',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientes_potenciales_formulario'); ?>
		<?php echo $form->textField($model,'clientes_potenciales_formulario',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clics_enlace'); ?>
		<?php echo $form->textField($model,'clics_enlace',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menciones_pagina'); ?>
		<?php echo $form->textField($model,'menciones_pagina',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'instalaciones_aplicacion_celulares'); ?>
		<?php echo $form->textField($model,'instalaciones_aplicacion_celulares',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'informacion_pago_agregada_no_internet'); ?>
		<?php echo $form->textField($model,'informacion_pago_agregada_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'articulos_agregados_carrito_no_internet'); ?>
		<?php echo $form->textField($model,'articulos_agregados_carrito_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'articulos_agregados_wishlist_no_internet'); ?>
		<?php echo $form->textField($model,'articulos_agregados_wishlist_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registros_completados_no_internet'); ?>
		<?php echo $form->textField($model,'registros_completados_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagos_iniciados_no_internet'); ?>
		<?php echo $form->textField($model,'pagos_iniciados_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientes_potenciales_no_internet'); ?>
		<?php echo $form->textField($model,'clientes_potenciales_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conversiones_otro_tipo_no_internet'); ?>
		<?php echo $form->textField($model,'conversiones_otro_tipo_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compras_no_internet'); ?>
		<?php echo $form->textField($model,'compras_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'busquedas_no_internet'); ?>
		<?php echo $form->textField($model,'busquedas_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visualizaciones_contenido_no_internet'); ?>
		<?php echo $form->textField($model,'visualizaciones_contenido_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conversiones_sitio_web'); ?>
		<?php echo $form->textField($model,'conversiones_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'informacion_pago_agregada_sitio_web'); ?>
		<?php echo $form->textField($model,'informacion_pago_agregada_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'articulos_agregados_carrito_sitio_web'); ?>
		<?php echo $form->textField($model,'articulos_agregados_carrito_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'articulos_agregados_wishlist_sitio_web'); ?>
		<?php echo $form->textField($model,'articulos_agregados_wishlist_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registros_completados_sitio_web'); ?>
		<?php echo $form->textField($model,'registros_completados_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagos_iniciados_sitio_web'); ?>
		<?php echo $form->textField($model,'pagos_iniciados_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientes_potenciales_sitio_web'); ?>
		<?php echo $form->textField($model,'clientes_potenciales_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compras_sitio_web'); ?>
		<?php echo $form->textField($model,'compras_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'busquedas_sitio_web'); ?>
		<?php echo $form->textField($model,'busquedas_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visualizaciones_contenido_sitio_web'); ?>
		<?php echo $form->textField($model,'visualizaciones_contenido_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conversaciones_mensajes_bloqueadas'); ?>
		<?php echo $form->textField($model,'conversaciones_mensajes_bloqueadas',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'respuesta_mensajes'); ?>
		<?php echo $form->textField($model,'respuesta_mensajes',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nuevas_conversiones_mensajes'); ?>
		<?php echo $form->textField($model,'nuevas_conversiones_mensajes',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'finalizacion_flujo_trabajo_facebook'); ?>
		<?php echo $form->textField($model,'finalizacion_flujo_trabajo_facebook',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compras_facebook'); ?>
		<?php echo $form->textField($model,'compras_facebook',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'participacion_pagina'); ?>
		<?php echo $form->textField($model,'participacion_pagina',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visualizacion_fotos'); ?>
		<?php echo $form->textField($model,'visualizacion_fotos',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'veces_compartida_publicacion'); ?>
		<?php echo $form->textField($model,'veces_compartida_publicacion',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comentarios_publicacion'); ?>
		<?php echo $form->textField($model,'comentarios_publicacion',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interaccion_publicacion'); ?>
		<?php echo $form->textField($model,'interaccion_publicacion',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reacciones_publicacion'); ?>
		<?php echo $form->textField($model,'reacciones_publicacion',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'respuestas_eventos'); ?>
		<?php echo $form->textField($model,'respuestas_eventos',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visitas_pestanas_pagina'); ?>
		<?php echo $form->textField($model,'visitas_pestanas_pagina',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reproduciones_video_3_segundos'); ?>
		<?php echo $form->textField($model,'reproduciones_video_3_segundos',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'logros_desbloqueados_unicos_aplicacion'); ?>
		<?php echo $form->textField($model,'logros_desbloqueados_unicos_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sesiones_unicas_aplicacion'); ?>
		<?php echo $form->textField($model,'sesiones_unicas_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'informacion_pago_unica_agregada_aplicacion'); ?>
		<?php echo $form->textField($model,'informacion_pago_unica_agregada_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'articulos_agregados_carrito_unicos_aplicacion'); ?>
		<?php echo $form->textField($model,'articulos_agregados_carrito_unicos_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'articulos_agregados_wishlist_unicos_aplicacion'); ?>
		<?php echo $form->textField($model,'articulos_agregados_wishlist_unicos_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registros_unicos_completados_aplicacion'); ?>
		<?php echo $form->textField($model,'registros_unicos_completados_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visualizaciones_contenido_unicas_aplicacion'); ?>
		<?php echo $form->textField($model,'visualizaciones_contenido_unicas_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagos_iniciados_unicos_aplicacion'); ?>
		<?php echo $form->textField($model,'pagos_iniciados_unicos_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'niveles_unicos_completados_aplicacion'); ?>
		<?php echo $form->textField($model,'niveles_unicos_completados_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compras_unicas_aplicacion'); ?>
		<?php echo $form->textField($model,'compras_unicas_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calificaciones_unicas_aplicacion_enviadas'); ?>
		<?php echo $form->textField($model,'calificaciones_unicas_aplicacion_enviadas',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'busquedas_unicas_aplicacion'); ?>
		<?php echo $form->textField($model,'busquedas_unicas_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gastos_creditos_unicos_aplicacion'); ?>
		<?php echo $form->textField($model,'gastos_creditos_unicos_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tutoriales_unicos_completados_aplicacion'); ?>
		<?php echo $form->textField($model,'tutoriales_unicos_completados_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clics_unicos_enlaces'); ?>
		<?php echo $form->textField($model,'clics_unicos_enlaces',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentaje_tiempocomponentes_canvas'); ?>
		<?php echo $form->textField($model,'porcentaje_tiempocomponentes_canvas',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_accion_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_accion_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_logro_desbloqueado_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_logro_desbloqueado_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_sesion_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_sesion_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_informacion_pago_agregada_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_informacion_pago_agregada_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_articulo_agregado_carrito_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_articulo_agregado_carrito_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_articulo_agregado_wishlist_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_articulo_agregado_wishlist_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_registro_completado_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_registro_completado_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_visualizacion_contenido_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_visualizacion_contenido_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_pago_iniciado_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_pago_iniciado_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_nivel_completado_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_nivel_completado_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_compra_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_compra_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_calificacion_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_calificacion_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_busqueda_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_busqueda_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_gasto_credito_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_gasto_credito_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_tutorial_completado_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_tutorial_completado_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_accion_otro_tipo_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_accion_otro_tipo_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_interaccion_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_interaccion_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_instalacion_aplicacion_pc_mxn'); ?>
		<?php echo $form->textField($model,'costo_instalacion_aplicacion_pc_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_interaccion_historia_aplicacion_pc_mxn'); ?>
		<?php echo $form->textField($model,'costo_interaccion_historia_aplicacion_pc_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_uso_aplicacion_pc_mxn'); ?>
		<?php echo $form->textField($model,'costo_uso_aplicacion_pc_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_visita_mxn'); ?>
		<?php echo $form->textField($model,'costo_visita_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_solicitud_oferta_mxn'); ?>
		<?php echo $form->textField($model,'costo_solicitud_oferta_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_accion_gasto_creditos_mxn'); ?>
		<?php echo $form->textField($model,'costo_accion_gasto_creditos_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_partida_juego_mxn'); ?>
		<?php echo $form->textField($model,'costo_partida_juego_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_cliente_potencial_mxn'); ?>
		<?php echo $form->textField($model,'costo_cliente_potencial_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_me_gusta_pag_mxn'); ?>
		<?php echo $form->textField($model,'costo_me_gusta_pag_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpc_mxn'); ?>
		<?php echo $form->textField($model,'cpc_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_mencion_pag_mxn'); ?>
		<?php echo $form->textField($model,'costo_mencion_pag_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_instalacion_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_instalacion_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_informacion_pago_agregada_no_internet_mxn'); ?>
		<?php echo $form->textField($model,'costo_informacion_pago_agregada_no_internet_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_articulo_agregado_carrito_no_internet_mxn'); ?>
		<?php echo $form->textField($model,'costo_articulo_agregado_carrito_no_internet_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_articulo_agregado_wishlist_no_internet_mxn'); ?>
		<?php echo $form->textField($model,'costo_articulo_agregado_wishlist_no_internet_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_registro_completado_no_internet_mxn'); ?>
		<?php echo $form->textField($model,'costo_registro_completado_no_internet_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_pago_iniciado_no_internet_mxn'); ?>
		<?php echo $form->textField($model,'costo_pago_iniciado_no_internet_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_cliente_potencial_no_internet'); ?>
		<?php echo $form->textField($model,'costo_cliente_potencial_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_conversion_otro_tipo_no_internet'); ?>
		<?php echo $form->textField($model,'costo_conversion_otro_tipo_no_internet',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_compra_no_internet_mxn'); ?>
		<?php echo $form->textField($model,'costo_compra_no_internet_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_busqueda_no_internet_mxn'); ?>
		<?php echo $form->textField($model,'costo_busqueda_no_internet_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_visualizacion_contenido_no_internet_mxn'); ?>
		<?php echo $form->textField($model,'costo_visualizacion_contenido_no_internet_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_conversion_sitio_web_mxn'); ?>
		<?php echo $form->textField($model,'costo_conversion_sitio_web_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_informacion_pago_agregada_sitio_web_mxn'); ?>
		<?php echo $form->textField($model,'costo_informacion_pago_agregada_sitio_web_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_articulo_agregado_carrito_sitio_web_mxn'); ?>
		<?php echo $form->textField($model,'costo_articulo_agregado_carrito_sitio_web_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_articulo_agregado_wishlist_sitio_web_mxn'); ?>
		<?php echo $form->textField($model,'costo_articulo_agregado_wishlist_sitio_web_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_registro_completado_sitio_web_mxn'); ?>
		<?php echo $form->textField($model,'costo_registro_completado_sitio_web_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_pago_iniciado_sitio_web_mxn'); ?>
		<?php echo $form->textField($model,'costo_pago_iniciado_sitio_web_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_cliente_potencial_sitio_web_mxn'); ?>
		<?php echo $form->textField($model,'costo_cliente_potencial_sitio_web_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_compra_sitio_web_mxn'); ?>
		<?php echo $form->textField($model,'costo_compra_sitio_web_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_busqueda_sitio_web_mxn'); ?>
		<?php echo $form->textField($model,'costo_busqueda_sitio_web_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_visualizacion_contenido_sitio_web_mxn'); ?>
		<?php echo $form->textField($model,'costo_visualizacion_contenido_sitio_web_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_finalizacion_flujo_trabajo_facebook_mxn'); ?>
		<?php echo $form->textField($model,'costo_finalizacion_flujo_trabajo_facebook_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_nueva_conversacion_mensajes_mxn'); ?>
		<?php echo $form->textField($model,'costo_nueva_conversacion_mensajes_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_respuesta_mensajes_mxn'); ?>
		<?php echo $form->textField($model,'costo_respuesta_mensajes_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_compra_facebook_mxn'); ?>
		<?php echo $form->textField($model,'costo_compra_facebook_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_interaccion_pagina_mxn'); ?>
		<?php echo $form->textField($model,'costo_interaccion_pagina_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_visualizacion_foto_mxn'); ?>
		<?php echo $form->textField($model,'costo_visualizacion_foto_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_veces_compartida_publicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_veces_compartida_publicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_comentario_publicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_comentario_publicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_interaccion_publicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_interaccion_publicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_reaccion_publicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_reaccion_publicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_respuesta_evento_mxn'); ?>
		<?php echo $form->textField($model,'costo_respuesta_evento_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_visita_pestana_pagina_mxn'); ?>
		<?php echo $form->textField($model,'costo_visita_pestana_pagina_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_reproduccion_video_3_seg_mxn'); ?>
		<?php echo $form->textField($model,'costo_reproduccion_video_3_seg_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_outbound_clic_mxn'); ?>
		<?php echo $form->textField($model,'costo_outbound_clic_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_logro_desbloqueado_unico_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_logro_desbloqueado_unico_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_sesion_unica_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_sesion_unica_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_informacion_pago_agregada_unica_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_informacion_pago_agregada_unica_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_articulo_agregado_carrito_unico_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_articulo_agregado_carrito_unico_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_articulo_agregado_wishlist_unico_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_articulo_agregado_wishlist_unico_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_registro_unico_completado_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_registro_unico_completado_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_visualizacion_contenido_unico_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_visualizacion_contenido_unico_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_pago_iniciado_unico_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_pago_iniciado_unico_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_nivel_completado_unico_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_nivel_completado_unico_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_compra_unica_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_compra_unica_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_calificacion_unica_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_calificacion_unica_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_busqueda_unica_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_busqueda_unica_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_gasto_credito_unico_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_gasto_credito_unico_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_tutorial_unico_completado_aplicacion_mxn'); ?>
		<?php echo $form->textField($model,'costo_tutorial_unico_completado_aplicacion_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_clic_unico_enlace_mxn'); ?>
		<?php echo $form->textField($model,'costo_clic_unico_enlace_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_clic_saliente_unico_mxn'); ?>
		<?php echo $form->textField($model,'costo_clic_saliente_unico_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_reproduccion_video_10_seg_mxn'); ?>
		<?php echo $form->textField($model,'costo_reproduccion_video_10_seg_mxn',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clics_salientes'); ?>
		<?php echo $form->textField($model,'clics_salientes',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctr_saliente'); ?>
		<?php echo $form->textField($model,'ctr_saliente',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clic_saliente_unico'); ?>
		<?php echo $form->textField($model,'clic_saliente_unico',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'str_saliente_unico'); ?>
		<?php echo $form->textField($model,'str_saliente_unico',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentaje_video_reproducido'); ?>
		<?php echo $form->textField($model,'porcentaje_video_reproducido',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiempo_promedio_reproduccion_video'); ?>
		<?php echo $form->textField($model,'tiempo_promedio_reproduccion_video'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reproducciones_video_100'); ?>
		<?php echo $form->textField($model,'reproducciones_video_100',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reproducciones_video_25'); ?>
		<?php echo $form->textField($model,'reproducciones_video_25',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reproducciones_video_50'); ?>
		<?php echo $form->textField($model,'reproducciones_video_50',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reproducciones_video_75'); ?>
		<?php echo $form->textField($model,'reproducciones_video_75',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reproducciones_video_95'); ?>
		<?php echo $form->textField($model,'reproducciones_video_95',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reproducciones_video_10_seg'); ?>
		<?php echo $form->textField($model,'reproducciones_video_10_seg',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reproducciones_video_30_seg'); ?>
		<?php echo $form->textField($model,'reproducciones_video_30_seg',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctr'); ?>
		<?php echo $form->textField($model,'ctr',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'roas_compras_sitio_web'); ?>
		<?php echo $form->textField($model,'roas_compras_sitio_web',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'roas_compras_aplicacion'); ?>
		<?php echo $form->textField($model,'roas_compras_aplicacion',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'puja'); ?>
		<?php echo $form->textField($model,'puja',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_puja'); ?>
		<?php echo $form->textField($model,'tipo_puja',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visualizaciones_de_fotos'); ?>
		<?php echo $form->textField($model,'visualizaciones_de_fotos',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->