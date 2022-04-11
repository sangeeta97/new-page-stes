# new-page-stes
## Additional Documentation

This package is the focus of a peer-reviewed journal article in Environmental Research. The citation is:
Schum S.K., Brown L.E., Mazzoleni L.R., MFAssignR: Molecular formula assignment software for ultrahigh resolution mass spectrometry analysis of environmental complex mixtures, Environmental Research, https://doi.org/10.1016/j.envres.2020.11011, volume 191, (2020). 

If you use this package please refer to this publication as well.

## Package Overview and References

The MFAssignR package was designed for multi-element molecular formula (MF) assignment of ultrahigh resolution mass spectrometry measurements. A number of tools for internal mass recalibration, MF assignment, signal-to-noise evaluation, and unambiguous MF assignments are provided. This package contains MFAssign(), MFAssign_RMD(), MFAssignCHO(), MFAssignCHO_RMD(), SNplot(), HistNoise(), KMDNoise(), RecalList(), Recal(), and IsoFiltR() described in the sections below. Note, the functions with “RMD” were designed to be run within an R Markdown file and are otherwise identical to the corresponding non-”RMD” versions. To learn more, please see the section titled “Semi-Automated MFAssignR Functions” in the User Manual.  User caution with the function parameter settings and output evaluation is required; thus, several function outputs are provided to assist the user with these evaluations.

## Molecular Formula (MF) Assignment

The MF assignment algorithm in MFAssign was adapted from the low mass moiety CHOFIT assignment algorithm developed by Green and Perdue (2015). Briefly, the CHOFIT algorithm uses low mass moieties such as CH4O-1 and C4O-3 to move around in the O/C and H/C space to assign MF with C, H, and O without conventional loops. The MFAssignCHO function uses the CHOFIT strategy to assign MF with C, H, and O. Additional combinatorial assignments with various heteroatoms are made using nested loops that subtract the mass of a heteroatom from the measured ion mass, creating a CHO “core” mass, which can then be assigned using the low mass moiety CHOFIT approach. The MFAssign function uses this latter approach with several additional heteroatoms. Further information is available in Green and Perdue (2015) and Perdue and Green (2015). 

### MFAssign()
