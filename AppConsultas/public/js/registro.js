function backTop() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

$( document ).ready(function() {
  // sintomasGenerales();
  fichaIdentificacion();
});

function habilitarBotones(){
  $(".menu").removeAttr("disabled");
}

function fichaIdentificacion(){
  $("#ficha_id").show();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function antecedentesHF(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").show();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function antecedentesPNP(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").show();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function antecedentesPP(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").show();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function antecedentesGO(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").show();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function padecimientoActual(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").show();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function sintomasGenerales(){
  // alert('prueba');
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").show();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function aparatosSistemas(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").show();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function diagnosticosAnteriores(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").show();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function exploracionFisica(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").show();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function exploracionGeneral(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").show();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function exploracionRegion(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").show();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function sistemaMusculoEs(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").show();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function diagnosticoFisio(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").show();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function dermatomas(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").show();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function mapaDolor(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").show();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function arcosMovimiento(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").show();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function parNervio(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").show();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function escalaAshworth(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").show();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").hide();
}

function reflejosOsteo(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").show();
  $("#tipo_marcha").hide();
}

function tiposMarcha(){
  $("#ficha_id").hide();
  $("#antecedentes_hf").hide();
  $("#antecedentes_pnp").hide();
  $("#antecedentes_pp").hide();
  $("#antecedentes_go").hide();
  $("#padecimiento_actual").hide();
  $("#sintomas_generales").hide();
  $("#apa_sis").hide();
  $("#diag_ant").hide();
  $("#explor_fisica").hide();
  $("#explor_general").hide();
  $("#explor_region").hide();
  $("#sis_muscu").hide();
  $("#diagnostico_fisio").hide();
  $("#dermatomas_etc").hide();
  $("#mapa_dolor").hide();
  $("#arcos_movimiento").hide();
  $("#par_nervio").hide();
  $("#escala_ashworth").hide();
  $("#reflejos_osteo").hide();
  $("#tipo_marcha").show();
}
