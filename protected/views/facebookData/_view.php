<?php
/* @var $this FacebookDataController */
/* @var $data FacebookData */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idfacebook_data')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idfacebook_data), array('view', 'id'=>$data->idfacebook_data)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_anuncio')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_anuncio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entrega')); ?>:</b>
	<?php echo CHtml::encode($data->entrega); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resultados')); ?>:</b>
	<?php echo CHtml::encode($data->resultados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indicador_resultados')); ?>:</b>
	<?php echo CHtml::encode($data->indicador_resultados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alcance')); ?>:</b>
	<?php echo CHtml::encode($data->alcance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_resultados')); ?>:</b>
	<?php echo CHtml::encode($data->costo_resultados); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('importe_gastado')); ?>:</b>
	<?php echo CHtml::encode($data->importe_gastado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puntuacion_relevancia')); ?>:</b>
	<?php echo CHtml::encode($data->puntuacion_relevancia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personas_acciones')); ?>:</b>
	<?php echo CHtml::encode($data->personas_acciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('me_gusta_pagina')); ?>:</b>
	<?php echo CHtml::encode($data->me_gusta_pagina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cuenta')); ?>:</b>
	<?php echo CHtml::encode($data->id_cuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_cuenta')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_cuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_anuncio')); ?>:</b>
	<?php echo CHtml::encode($data->id_anuncio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finalizacion')); ?>:</b>
	<?php echo CHtml::encode($data->finalizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clicks_boton')); ?>:</b>
	<?php echo CHtml::encode($data->clicks_boton); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentaje_visualizacion_canvas')); ?>:</b>
	<?php echo CHtml::encode($data->porcentaje_visualizacion_canvas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo_visualizacion_canvas')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo_visualizacion_canvas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_campana')); ?>:</b>
	<?php echo CHtml::encode($data->id_campana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_campana')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_campana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_conjunto_anuncios')); ?>:</b>
	<?php echo CHtml::encode($data->id_conjunto_anuncios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_conjunto_anuncios')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_conjunto_anuncios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click_todos')); ?>:</b>
	<?php echo CHtml::encode($data->click_todos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_mejora_estimada')); ?>:</b>
	<?php echo CHtml::encode($data->costo_mejora_estimada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_cualquier_accion')); ?>:</b>
	<?php echo CHtml::encode($data->costo_cualquier_accion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_click_unico')); ?>:</b>
	<?php echo CHtml::encode($data->costo_click_unico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpc_todos')); ?>:</b>
	<?php echo CHtml::encode($data->cpc_todos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpm_impresiones')); ?>:</b>
	<?php echo CHtml::encode($data->cpm_impresiones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_mil_personas')); ?>:</b>
	<?php echo CHtml::encode($data->costo_mil_personas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctr_todos')); ?>:</b>
	<?php echo CHtml::encode($data->ctr_todos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio_informe')); ?>:</b>
	<?php echo CHtml::encode($data->inicio_informe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fin_informe')); ?>:</b>
	<?php echo CHtml::encode($data->fin_informe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mejora_estimada_recuerdo')); ?>:</b>
	<?php echo CHtml::encode($data->mejora_estimada_recuerdo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indice_mejora_estimada')); ?>:</b>
	<?php echo CHtml::encode($data->indice_mejora_estimada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frecuencia')); ?>:</b>
	<?php echo CHtml::encode($data->frecuencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('impreciones')); ?>:</b>
	<?php echo CHtml::encode($data->impreciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentarios_positivos')); ?>:</b>
	<?php echo CHtml::encode($data->comentarios_positivos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentarios_negativos')); ?>:</b>
	<?php echo CHtml::encode($data->comentarios_negativos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proporcion_resultados')); ?>:</b>
	<?php echo CHtml::encode($data->proporcion_resultados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clics_sociales')); ?>:</b>
	<?php echo CHtml::encode($data->clics_sociales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('impresiones_sociales')); ?>:</b>
	<?php echo CHtml::encode($data->impresiones_sociales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alcance_social')); ?>:</b>
	<?php echo CHtml::encode($data->alcance_social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe_gastado_hoy')); ?>:</b>
	<?php echo CHtml::encode($data->importe_gastado_hoy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('impresiones_en_bruto')); ?>:</b>
	<?php echo CHtml::encode($data->impresiones_en_bruto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_total')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acciones')); ?>:</b>
	<?php echo CHtml::encode($data->acciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clics_unicos_todos')); ?>:</b>
	<?php echo CHtml::encode($data->clics_unicos_todos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctr_unicos_todos')); ?>:</b>
	<?php echo CHtml::encode($data->ctr_unicos_todos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctr_unico_porcentaje')); ?>:</b>
	<?php echo CHtml::encode($data->ctr_unico_porcentaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clics_socilaes_unicos_todos')); ?>:</b>
	<?php echo CHtml::encode($data->clics_socilaes_unicos_todos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversiones_accion_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversiones_accion_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_articulos_carrito_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_articulos_carrito_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_artuculos_wishlist_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_artuculos_wishlist_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_visualizacion_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_visualizacion_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_pagos_iniciados_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_pagos_iniciados_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_compras_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_compras_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_calificaciones_unicas_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_calificaciones_unicas_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_gastos_creditos_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_gastos_creditos_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_gastos_creditos')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_gastos_creditos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_informacion_pago_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_informacion_pago_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversionarticulos_wishlist_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversionarticulos_wishlist_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_registros_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_registros_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_poagos_iniciados_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_poagos_iniciados_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_clientes_potenciales_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_clientes_potenciales_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_otro_tipo_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_otro_tipo_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_compras_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_compras_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_busquedas_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_busquedas_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_visualizacion_contenido_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_visualizacion_contenido_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_informacion_pago_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_informacion_pago_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_productos_carrito_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_productos_carrito_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_articulos_wishlist_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_articulos_wishlist_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_registros_completados_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_registros_completados_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_pagos_iniciados_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_pagos_iniciados_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_clientes_potenciales_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_clientes_potenciales_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_compras_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_compras_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_busquedas_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_busquedas_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_visualizacion_contenido_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_visualizacion_contenido_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_comversion_finalizacion_flujo_trabajo_facebook')); ?>:</b>
	<?php echo CHtml::encode($data->valor_comversion_finalizacion_flujo_trabajo_facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_conversion_compra_facxebook')); ?>:</b>
	<?php echo CHtml::encode($data->valor_conversion_compra_facxebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acciones_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->acciones_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logros_desbloqueados_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->logros_desbloqueados_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sessiones_aplicaciones')); ?>:</b>
	<?php echo CHtml::encode($data->sessiones_aplicaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informacion_pago_agregada_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->informacion_pago_agregada_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('articulos_agregados_carrito_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->articulos_agregados_carrito_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('articulos_agregados_wishlist_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->articulos_agregados_wishlist_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registros_completados_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->registros_completados_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visualizacion_contenidos_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->visualizacion_contenidos_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagos_iniciados_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->pagos_iniciados_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('niveles_completados_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->niveles_completados_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compras_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->compras_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calificaciones_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->calificaciones_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('busquedas_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->busquedas_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gastos_creditos_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->gastos_creditos_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tutoriales_completados_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->tutoriales_completados_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acciones_otro_tipo_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->acciones_otro_tipo_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interaccion_aplicacion_computadora')); ?>:</b>
	<?php echo CHtml::encode($data->interaccion_aplicacion_computadora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instalaciones_aplicacion_computadoras')); ?>:</b>
	<?php echo CHtml::encode($data->instalaciones_aplicacion_computadoras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interaccion_historia_aplicacion_computadoras')); ?>:</b>
	<?php echo CHtml::encode($data->interaccion_historia_aplicacion_computadoras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usos_aplicacion_computadoras')); ?>:</b>
	<?php echo CHtml::encode($data->usos_aplicacion_computadoras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitas')); ?>:</b>
	<?php echo CHtml::encode($data->visitas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('solicitudes_ofertas')); ?>:</b>
	<?php echo CHtml::encode($data->solicitudes_ofertas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gastos_creditos')); ?>:</b>
	<?php echo CHtml::encode($data->gastos_creditos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partidas_juegos')); ?>:</b>
	<?php echo CHtml::encode($data->partidas_juegos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientes_potenciales_formulario')); ?>:</b>
	<?php echo CHtml::encode($data->clientes_potenciales_formulario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clics_enlace')); ?>:</b>
	<?php echo CHtml::encode($data->clics_enlace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menciones_pagina')); ?>:</b>
	<?php echo CHtml::encode($data->menciones_pagina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instalaciones_aplicacion_celulares')); ?>:</b>
	<?php echo CHtml::encode($data->instalaciones_aplicacion_celulares); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informacion_pago_agregada_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->informacion_pago_agregada_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('articulos_agregados_carrito_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->articulos_agregados_carrito_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('articulos_agregados_wishlist_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->articulos_agregados_wishlist_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registros_completados_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->registros_completados_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagos_iniciados_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->pagos_iniciados_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientes_potenciales_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->clientes_potenciales_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conversiones_otro_tipo_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->conversiones_otro_tipo_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compras_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->compras_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('busquedas_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->busquedas_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visualizaciones_contenido_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->visualizaciones_contenido_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conversiones_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->conversiones_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informacion_pago_agregada_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->informacion_pago_agregada_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('articulos_agregados_carrito_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->articulos_agregados_carrito_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('articulos_agregados_wishlist_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->articulos_agregados_wishlist_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registros_completados_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->registros_completados_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagos_iniciados_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->pagos_iniciados_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientes_potenciales_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->clientes_potenciales_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compras_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->compras_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('busquedas_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->busquedas_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visualizaciones_contenido_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->visualizaciones_contenido_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conversaciones_mensajes_bloqueadas')); ?>:</b>
	<?php echo CHtml::encode($data->conversaciones_mensajes_bloqueadas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respuesta_mensajes')); ?>:</b>
	<?php echo CHtml::encode($data->respuesta_mensajes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nuevas_conversiones_mensajes')); ?>:</b>
	<?php echo CHtml::encode($data->nuevas_conversiones_mensajes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finalizacion_flujo_trabajo_facebook')); ?>:</b>
	<?php echo CHtml::encode($data->finalizacion_flujo_trabajo_facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compras_facebook')); ?>:</b>
	<?php echo CHtml::encode($data->compras_facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('participacion_pagina')); ?>:</b>
	<?php echo CHtml::encode($data->participacion_pagina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visualizacion_fotos')); ?>:</b>
	<?php echo CHtml::encode($data->visualizacion_fotos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('veces_compartida_publicacion')); ?>:</b>
	<?php echo CHtml::encode($data->veces_compartida_publicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentarios_publicacion')); ?>:</b>
	<?php echo CHtml::encode($data->comentarios_publicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interaccion_publicacion')); ?>:</b>
	<?php echo CHtml::encode($data->interaccion_publicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reacciones_publicacion')); ?>:</b>
	<?php echo CHtml::encode($data->reacciones_publicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respuestas_eventos')); ?>:</b>
	<?php echo CHtml::encode($data->respuestas_eventos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitas_pestanas_pagina')); ?>:</b>
	<?php echo CHtml::encode($data->visitas_pestanas_pagina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reproduciones_video_3_segundos')); ?>:</b>
	<?php echo CHtml::encode($data->reproduciones_video_3_segundos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logros_desbloqueados_unicos_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->logros_desbloqueados_unicos_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sesiones_unicas_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->sesiones_unicas_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informacion_pago_unica_agregada_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->informacion_pago_unica_agregada_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('articulos_agregados_carrito_unicos_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->articulos_agregados_carrito_unicos_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('articulos_agregados_wishlist_unicos_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->articulos_agregados_wishlist_unicos_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registros_unicos_completados_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->registros_unicos_completados_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visualizaciones_contenido_unicas_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->visualizaciones_contenido_unicas_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagos_iniciados_unicos_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->pagos_iniciados_unicos_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('niveles_unicos_completados_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->niveles_unicos_completados_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compras_unicas_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->compras_unicas_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calificaciones_unicas_aplicacion_enviadas')); ?>:</b>
	<?php echo CHtml::encode($data->calificaciones_unicas_aplicacion_enviadas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('busquedas_unicas_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->busquedas_unicas_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gastos_creditos_unicos_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->gastos_creditos_unicos_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tutoriales_unicos_completados_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->tutoriales_unicos_completados_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clics_unicos_enlaces')); ?>:</b>
	<?php echo CHtml::encode($data->clics_unicos_enlaces); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentaje_tiempocomponentes_canvas')); ?>:</b>
	<?php echo CHtml::encode($data->porcentaje_tiempocomponentes_canvas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_accion_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_accion_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_logro_desbloqueado_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_logro_desbloqueado_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_sesion_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_sesion_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_informacion_pago_agregada_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_informacion_pago_agregada_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_articulo_agregado_carrito_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_articulo_agregado_carrito_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_articulo_agregado_wishlist_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_articulo_agregado_wishlist_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_registro_completado_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_registro_completado_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_visualizacion_contenido_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_visualizacion_contenido_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_pago_iniciado_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_pago_iniciado_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_nivel_completado_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_nivel_completado_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_compra_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_compra_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_calificacion_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_calificacion_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_busqueda_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_busqueda_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_gasto_credito_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_gasto_credito_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_tutorial_completado_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_tutorial_completado_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_accion_otro_tipo_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_accion_otro_tipo_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_interaccion_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_interaccion_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_instalacion_aplicacion_pc_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_instalacion_aplicacion_pc_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_interaccion_historia_aplicacion_pc_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_interaccion_historia_aplicacion_pc_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_uso_aplicacion_pc_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_uso_aplicacion_pc_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_visita_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_visita_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_solicitud_oferta_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_solicitud_oferta_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_accion_gasto_creditos_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_accion_gasto_creditos_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_partida_juego_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_partida_juego_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_cliente_potencial_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_cliente_potencial_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_me_gusta_pag_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_me_gusta_pag_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpc_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->cpc_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_mencion_pag_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_mencion_pag_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_instalacion_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_instalacion_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_informacion_pago_agregada_no_internet_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_informacion_pago_agregada_no_internet_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_articulo_agregado_carrito_no_internet_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_articulo_agregado_carrito_no_internet_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_articulo_agregado_wishlist_no_internet_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_articulo_agregado_wishlist_no_internet_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_registro_completado_no_internet_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_registro_completado_no_internet_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_pago_iniciado_no_internet_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_pago_iniciado_no_internet_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_cliente_potencial_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->costo_cliente_potencial_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_conversion_otro_tipo_no_internet')); ?>:</b>
	<?php echo CHtml::encode($data->costo_conversion_otro_tipo_no_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_compra_no_internet_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_compra_no_internet_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_busqueda_no_internet_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_busqueda_no_internet_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_visualizacion_contenido_no_internet_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_visualizacion_contenido_no_internet_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_conversion_sitio_web_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_conversion_sitio_web_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_informacion_pago_agregada_sitio_web_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_informacion_pago_agregada_sitio_web_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_articulo_agregado_carrito_sitio_web_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_articulo_agregado_carrito_sitio_web_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_articulo_agregado_wishlist_sitio_web_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_articulo_agregado_wishlist_sitio_web_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_registro_completado_sitio_web_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_registro_completado_sitio_web_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_pago_iniciado_sitio_web_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_pago_iniciado_sitio_web_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_cliente_potencial_sitio_web_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_cliente_potencial_sitio_web_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_compra_sitio_web_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_compra_sitio_web_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_busqueda_sitio_web_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_busqueda_sitio_web_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_visualizacion_contenido_sitio_web_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_visualizacion_contenido_sitio_web_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_finalizacion_flujo_trabajo_facebook_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_finalizacion_flujo_trabajo_facebook_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_nueva_conversacion_mensajes_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_nueva_conversacion_mensajes_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_respuesta_mensajes_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_respuesta_mensajes_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_compra_facebook_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_compra_facebook_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_interaccion_pagina_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_interaccion_pagina_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_visualizacion_foto_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_visualizacion_foto_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_veces_compartida_publicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_veces_compartida_publicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_comentario_publicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_comentario_publicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_interaccion_publicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_interaccion_publicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_reaccion_publicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_reaccion_publicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_respuesta_evento_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_respuesta_evento_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_visita_pestana_pagina_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_visita_pestana_pagina_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_reproduccion_video_3_seg_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_reproduccion_video_3_seg_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_outbound_clic_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_outbound_clic_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_logro_desbloqueado_unico_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_logro_desbloqueado_unico_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_sesion_unica_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_sesion_unica_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_informacion_pago_agregada_unica_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_informacion_pago_agregada_unica_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_articulo_agregado_carrito_unico_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_articulo_agregado_carrito_unico_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_articulo_agregado_wishlist_unico_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_articulo_agregado_wishlist_unico_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_registro_unico_completado_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_registro_unico_completado_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_visualizacion_contenido_unico_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_visualizacion_contenido_unico_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_pago_iniciado_unico_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_pago_iniciado_unico_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_nivel_completado_unico_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_nivel_completado_unico_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_compra_unica_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_compra_unica_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_calificacion_unica_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_calificacion_unica_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_busqueda_unica_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_busqueda_unica_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_gasto_credito_unico_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_gasto_credito_unico_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_tutorial_unico_completado_aplicacion_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_tutorial_unico_completado_aplicacion_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_clic_unico_enlace_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_clic_unico_enlace_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_clic_saliente_unico_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_clic_saliente_unico_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_reproduccion_video_10_seg_mxn')); ?>:</b>
	<?php echo CHtml::encode($data->costo_reproduccion_video_10_seg_mxn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clics_salientes')); ?>:</b>
	<?php echo CHtml::encode($data->clics_salientes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctr_saliente')); ?>:</b>
	<?php echo CHtml::encode($data->ctr_saliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clic_saliente_unico')); ?>:</b>
	<?php echo CHtml::encode($data->clic_saliente_unico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('str_saliente_unico')); ?>:</b>
	<?php echo CHtml::encode($data->str_saliente_unico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentaje_video_reproducido')); ?>:</b>
	<?php echo CHtml::encode($data->porcentaje_video_reproducido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo_promedio_reproduccion_video')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo_promedio_reproduccion_video); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reproducciones_video_100')); ?>:</b>
	<?php echo CHtml::encode($data->reproducciones_video_100); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reproducciones_video_25')); ?>:</b>
	<?php echo CHtml::encode($data->reproducciones_video_25); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reproducciones_video_50')); ?>:</b>
	<?php echo CHtml::encode($data->reproducciones_video_50); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reproducciones_video_75')); ?>:</b>
	<?php echo CHtml::encode($data->reproducciones_video_75); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reproducciones_video_95')); ?>:</b>
	<?php echo CHtml::encode($data->reproducciones_video_95); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reproducciones_video_10_seg')); ?>:</b>
	<?php echo CHtml::encode($data->reproducciones_video_10_seg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reproducciones_video_30_seg')); ?>:</b>
	<?php echo CHtml::encode($data->reproducciones_video_30_seg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctr')); ?>:</b>
	<?php echo CHtml::encode($data->ctr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roas_compras_sitio_web')); ?>:</b>
	<?php echo CHtml::encode($data->roas_compras_sitio_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roas_compras_aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->roas_compras_aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puja')); ?>:</b>
	<?php echo CHtml::encode($data->puja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_puja')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_puja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visualizaciones_de_fotos')); ?>:</b>
	<?php echo CHtml::encode($data->visualizaciones_de_fotos); ?>
	<br />

	*/ ?>

</div>