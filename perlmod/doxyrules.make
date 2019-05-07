DOXY_EXEC_PATH = C:/xampp/htdocs/GPSMARISTAS/FT_Marista
DOXYFILE = C:/xampp/htdocs/GPSMARISTAS/FT_Marista/-
DOXYDOCS_PM = C:/xampp/htdocs/GPSMARISTAS/FT_Marista/perlmod/DoxyDocs.pm
DOXYSTRUCTURE_PM = C:/xampp/htdocs/GPSMARISTAS/FT_Marista/perlmod/DoxyStructure.pm
DOXYRULES = C:/xampp/htdocs/GPSMARISTAS/FT_Marista/perlmod/doxyrules.make

.PHONY: clean-perlmod
clean-perlmod::
	rm -f $(DOXYSTRUCTURE_PM) \
	$(DOXYDOCS_PM)

$(DOXYRULES) \
$(DOXYMAKEFILE) \
$(DOXYSTRUCTURE_PM) \
$(DOXYDOCS_PM): \
	$(DOXYFILE)
	cd $(DOXY_EXEC_PATH) ; doxygen "$<"
