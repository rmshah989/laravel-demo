<?php

use Illuminate\Database\Seeder;

class SubjectAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject_area_seeder = [
		['title' =>'Accounting'],
		['title' =>'Acoustics'],
		['title' =>'Aeronautical engineering'],
		['title' =>'Aging - Molecular'],
		['title' =>'Agricultural economics'],
		['title' =>'Agricultural science'],
		['title' =>'Algebra'],
		['title' =>'Analytical chemistry'],
		['title' =>'Anatomy'],
		['title' =>'Anesthesiology'],
		['title' =>'Animal genealogy'],
		['title' =>'Animal genetics'],
		['title' =>'Annual reports and quarterly reports'],
		['title' =>'Anthropology'],
		['title' =>'Applied psychology'],
		['title' =>'Applied chemistry'],
		['title' =>'Applied mathematics'],
		['title' =>'Applied physics'],
		['title' =>'Archaeology'],
		['title' =>'Art history'],
		['title' =>'Artificial intelligence'],
		['title' =>'Astrophysics'],
		['title' =>'Atmospheric optics'],
		['title' =>'Atmospheric chemistry'],
		['title' =>'Atmospheric science'],
		['title' =>'Atomic/Molecular physics'],
		['title' =>'Atomic and molecular physics'],
		['title' =>'Autobiography/Biography'],
		['title' =>'Automobile engineering'],
		['title' =>'Banking'],
		['title' =>'Basic English learning content'],
		['title' =>'Behavioral economics'],
		['title' =>'Behavioral medicine'],
		['title' =>'Biochemistry'],
		['title' =>'Biofuels'],
		['title' =>'Bioinformatics and computational biology'],
		['title' =>'Biomaterials'],
		['title' =>'Biomedical engineering'],
		['title' =>'Biophysics'],
		['title' =>'Biostatistics'],
		['title' =>'Book reviews'],
		['title' =>'Botany'],
		['title' =>'Business analysis'],
		['title' =>'Business administration'],
		['title' =>'Calculus'],
		['title' =>'Cancer research'],
		['title' =>'Cancer research - Chemoradiotherapy'],
		['title' =>'Cancer research - Clinical molecular studies'],
		['title' =>'Cardiology'],
		['title' =>'Catalysis'],
		['title' =>'Cell biology'],
		['title' =>'Composite materials'],
		['title' =>'Chemical engineering'],
		['title' =>'Chiropractics'],
		['title' =>'Civics'],
		['title' =>'Civil engineering'],
		['title' =>'Climate science'],
		['title' =>'Clinical psychiatry'],
		['title' =>'Clinical psychology'],
		['title' =>'Psychotherapy'],
		['title' =>'Cloud physics'],
		['title' =>'Cognitive neuroscience'],
		['title' =>'Cognitive psychology'],
		['title' =>'Coherence and statistical optics'],
		['title' =>'Surface chemistry'],
		['title' =>'Communication studies'],
		['title' =>'Comparative psychology'],
		['title' =>'Complementary and alternative medicine'],
		['title' =>'Computational chemistry'],
		['title' =>'Computational neuroscience'],
		['title' =>'Computer software'],
		['title' =>'Computer graphics'],
		['title' =>'Computer hardware'],
		['title' =>'Computer science'],
		['title' =>'Computer security'],
		['title' =>'Computer vision'],
		['title' =>'Condensed matter physics'],
		['title' =>'Consumer behavior'],
		['title' =>'Consumer studies'],
		['title' =>'Control engineering'],
		['title' =>'Convective systems'],
		['title' =>'Criminology'],
		['title' =>'Cultural studies'],
		['title' =>'Curriculum development'],
		['title' =>'Curriculum studies'],
		['title' =>'Database systems'],
		['title' =>'Decision sciences'],
		['title' =>'Demography'],
		['title' =>'Dentistry'],
		['title' =>'Dermatology'],
		['title' =>'Descriptive linguistics'],
		['title' =>'Landscape aesthetics'],
		['title' =>'Detectors'],
		['title' =>'Development economics'],
		['title' =>'Developmental psychology'],
		['title' =>'Developmental neuroscience'],
		['title' =>'Diabetes research'],
		['title' =>'Dialogue'],
		['title' =>'Diffraction'],
		['title' =>'Disaster management'],
		['title' =>'Disaster medicine'],
		['title' =>'Drug discovery'],
		['title' =>'Ecology'],
		['title' =>'Econometrics'],
		['title' =>'Economic history'],
		['title' =>'Economic modeling'],
		['title' =>'Economic policy'],
		['title' =>'Economic theory'],
		['title' =>'Educational administration'],
		['title' =>'Educational assessment'],
		['title' =>'Educational methods'],
		['title' =>'Elder care'],
		['title' =>'Electric circuits'],
		['title' =>'Electrochemistry'],
		['title' =>'Electronic materials'],
		['title' =>'Electronics engineering'],
		['title' =>'ELT/TESL/TESOL/TEFL'],
		['title' =>'Embryology'],
		['title' =>'Emergency medicine'],
		['title' =>'Endocrinology'],
		['title' =>'Energy'],
		['title' =>'ENT (Otolaryngology)'],
		['title' =>'Entomology'],
		['title' =>'Environmental and energy policies'],
		['title' =>'Environmental science'],
		['title' =>'Ecotoxicology'],
		['title' =>'Enzymology'],
		['title' =>'Epidemiology'],
		['title' =>'ESL/EFL/ESOL/EAL'],
		['title' =>'ESP'],
		['title' =>'Ethics'],
		['title' =>'Ethology (Animal behavior)'],
		['title' =>'Evolutionary biology'],
		['title' =>'Evolutionary genetics'],
		['title' =>'Experimental psychology'],
		['title' =>'Fiber optics'],
		['title' =>'Ceramics'],
		['title' =>'Fiction writing'],
		['title' =>'Fine arts'],
		['title' =>'Fishery sciences'],
		['title' =>'Fluid dynamics'],
		['title' =>'Food chemistry'],
		['title' =>'Food science'],
		['title' =>'Forensic medicine'],
		['title' =>'Forensic science'],
		['title' =>'Forestry'],
		['title' =>'Fourier optics'],
		['title' =>'Gastroenterology'],
		['title' =>'Gender studies'],
		['title' =>'General education'],
		['title' =>'General linguistics'],
		['title' =>'General optics'],
		['title' =>'General psychology'],
		['title' =>'Human classical genetics'],
		['title' =>'Geodesy'],
		['title' =>'Environmental studies'],
		['title' =>'Geology'],
		['title' =>'Geometric optics'],
		['title' =>'Geometry'],
		['title' =>'Geophysics'],
		['title' =>'Geopolitics'],
		['title' =>'Geriatric medicine'],
		['title' =>'Health education'],
		['title' =>'Social healthcare'],
		['title' =>'Hematology'],
		['title' =>'High-energy and particle physics'],
		['title' =>'History'],
		['title' =>'History of Africa'],
		['title' =>'History of Asia'],
		['title' =>'History of Central Asia'],
		['title' =>'History of East Asia'],
		['title' =>'History of Europe'],
		['title' =>'History of the Americas'],
		['title' =>'History of the Middle East'],
		['title' =>'Holography'],
		['title' =>'Horticulture'],
		['title' =>'Human resource management'],
		['title' =>'Human-Computer interaction'],
		['title' =>'Hydrology'],
		['title' =>'Digital image processing'],
		['title' =>'Optical image processing'],
		['title' =>'Imaging systems'],
		['title' =>'Immunology'],
		['title' =>'Individual/Organization profile'],
		['title' =>'Industrial engineering'],
		['title' =>'Infectious diseases'],
		['title' =>'Information studies'],
		['title' =>'Information systems'],
		['title' =>'Inorganic chemistry'],
		['title' =>'Instruction manual/Guidelines'],
		['title' =>'Optical instrumentation'],
		['title' =>'Integrated optics'],
		['title' =>'Internal medicine'],
		['title' =>'International relations'],
		['title' =>'Internet'],
		['title' =>'Irrigation'],
		['title' =>'Labor economics'],
		['title' =>'Language acquisition'],
		['title' =>'Language assessment/Language testing'],
		['title' =>'Lasers'],
		['title' =>'Lasers and laser optics'],
		['title' =>'Law'],
		['title' =>'Linear physics'],
		['title' =>'Literary criticism'],
		['title' =>'Literary forms'],
		['title' =>'Literary history'],
		['title' =>'Literary nonfiction'],
		['title' =>'Literary theory'],
		['title' =>'Literary translation'],
		['title' =>'Literature'],
		['title' =>'Literature by era'],
		['title' =>'Machine learning'],
		['title' =>'Machine vision'],
		['title' =>'Macromolecular chemistry'],
		['title' =>'Magnetism'],
		['title' =>'Management consulting'],
		['title' =>'Manufacturing'],
		['title' =>'Marine biology'],
		['title' =>'Marine engineering'],
		['title' =>'Marketing'],
		['title' =>'Materials processing'],
		['title' =>'Materials'],
		['title' =>'Materials engineering'],
		['title' =>'Materials physics'],
		['title' =>'Materials science'],
		['title' =>'Mathematical modeling'],
		['title' =>'Mathematics'],
		['title' =>'Mechanical engineering'],
		['title' =>'Media'],
		['title' =>'Biomedical devices - Clinical applications'],
		['title' =>'Medical laboratory technology'],
		['title' =>'Medical optics'],
		['title' =>'Medical physics'],
		['title' =>'Metallurgy'],
		['title' =>'Meteorology'],
		['title' =>'Microbial biotechnology'],
		['title' =>'Microbiology'],
		['title' =>'Microscopy'],
		['title' =>'Petrology and mineralogy'],
		['title' =>'Mobile computing'],
		['title' =>'Molecular biology'],
		['title' =>'Molecular medicine'],
		['title' =>'Molecular oncology'],
		['title' =>'Monetary economics'],
		['title' =>'Morphology'],
		['title' =>'Music'],
		['title' =>'Mutagenesis'],
		['title' =>'Nanobiotechnology'],
		['title' =>'Nanochemistry'],
		['title' =>'Nanotechnology'],
		['title' =>'National literature'],
		['title' =>'Nature and landscape conservation'],
		['title' =>'Nephrology'],
		['title' =>'Networks'],
		['title' =>'Neural networks'],
		['title' =>'Neuroanatomy'],
		['title' =>'Neuroimaging'],
		['title' =>'Neuropathology'],
		['title' =>'Cellular neuroscience'],
		['title' =>'Neuroscience'],
		['title' =>'Neurosurgery'],
		['title' =>'News/Magazine reports or articles'],
		['title' =>'Nonlinear optics'],
		['title' =>'Nonlinear physics'],
		['title' =>'Nuclear chemistry'],
		['title' =>'Nuclear physics'],
		['title' =>'Numerical weather prediction'],
		['title' =>'Nursing policy'],
		['title' =>'Nursing medicine'],
		['title' =>'Nutrition'],
		['title' =>'Obstetrics'],
		['title' =>'Occupational health'],
		['title' =>'Oceanography'],
		['title' =>'Oncogenetics'],
		['title' =>'Operating systems'],
		['title' =>'Ophthalmology'],
		['title' =>'Opinion articles'],
		['title' =>'Optical data storage'],
		['title' =>'Optical design and fabrication'],
		['title' =>'Optical devices'],
		['title' =>'Optics'],
		['title' =>'Optics at surfaces'],
		['title' =>'Optics in computing'],
		['title' =>'Optoelectronics'],
		['title' =>'Optometry'],
		['title' =>'Organic chemistry'],
		['title' =>'Organizational behavior'],
		['title' =>'Ornithology'],
		['title' =>'Orthopedics'],
		['title' =>'Chemistry'],
		['title' =>'Economics'],
		['title' =>'Education'],
		['title' =>'Engineering and technology'],
		['title' =>'Medicine'],
		['title' =>'Pharmaceutical sciences'],
		['title' =>'Physics'],
		['title' =>'Other areas of optics'],
		['title' =>'Parallel systems'],
		['title' =>'Clinical diagnostics'],
		['title' =>'Pedagogy'],
		['title' =>'Pediatrics'],
		['title' =>'Performing arts'],
		['title' =>'Personal communication'],
		['title' =>'Pharmaceutical chemistry'],
		['title' =>'Pharmacogenomics'],
		['title' =>'Pharmacognosy'],
		['title' =>'Pharmacology'],
		['title' =>'Philosophy'],
		['title' =>'Phonology'],
		['title' =>'Photochemistry'],
		['title' =>'Physical chemistry'],
		['title' =>'Physical therapy'],
		['title' =>'Physical optics'],
		['title' =>'Molecular physiology'],
		['title' =>'Plant biotechnology'],
		['title' =>'Plant biochemistry'],
		['title' =>'Plant genealogy'],
		['title' =>'Plant genetics'],
		['title' =>'Plasma'],
		['title' =>'Plastic surgery'],
		['title' =>'Policy planning'],
		['title' =>'Political science'],
		['title' =>'Pollution'],
		['title' =>'Polymer chemistry'],
		['title' =>'Population genetics'],
		['title' =>'Pragmatics'],
		['title' =>'Computer programming'],
		['title' =>'Project/Program description'],
		['title' =>'Promotional content'],
		['title' =>'Public administration'],
		['title' =>'Public economics'],
		['title' =>'Public health'],
		['title' =>'Quantum optics'],
		['title' =>'Quantum physics'],
		['title' =>'Race'],
		['title' =>'Radiation'],
		['title' =>'Radiology'],
		['title' =>'Radiotherapy planning'],
		['title' =>'Recommendation letter'],
		['title' =>'Records management'],
		['title' =>'Religious studies'],
		['title' =>'Remote sensing'],
		['title' =>'Remote sensing and sensor optics'],
		['title' =>'Renewable energy'],
		['title' =>'Reproductive biology'],
		['title' =>'Reproductive medicine'],
		['title' =>'Respiratory care'],
		['title' =>'Resumes'],
		['title' =>'Rheumatology'],
		['title' =>'Robotics'],
		['title' =>'Rural sociology'],
		['title' =>'Scattering'],
		['title' =>'School/University/Job application'],
		['title' =>'Seismology and tectonics'],
		['title' =>'Semantics'],
		['title' =>'Electronic sensors'],
		['title' =>'Sensory systems'],
		['title' =>'Sexual health'],
		['title' =>'Signal processing'],
		['title' =>'Social psychology'],
		['title' =>'Sociology'],
		['title' =>'Software engineering'],
		['title' =>'Soil science'],
		['title' =>'Solid-state physics'],
		['title' =>'Space and planetary science'],
		['title' =>'Spatial economics'],
		['title' =>'Specialist studies in education'],
		['title' =>'Spectroscopy'],
		['title' =>'Sports'],
		['title' =>'Sports medicine'],
		['title' =>'Statistics'],
		['title' =>'Stem cell research'],
		['title' =>'Operations management'],
		['title' =>'Structural biology'],
		['title' =>'Structural chemistry'],
		['title' =>'Creative arts'],
		['title' =>'Supply chain management'],
		['title' =>'Supramolecular chemistry'],
		['title' =>'Head and neck surgery'],
		['title' =>'Surgery - Cardiac and cardiothoracic'],
		['title' =>'Sustainable development'],
		['title' =>'Synoptic meteorology'],
		['title' =>'Syntax'],
		['title' =>'Systems biology'],
		['title' =>'Taxonomy'],
		['title' =>'Telecommunications'],
		['title' =>'Theoretical chemistry'],
		['title' =>'Theoretical physics'],
		['title' =>'Thin films'],
		['title' =>'Tourism economics'],
		['title' =>'Tourism studies'],
		['title' =>'Hospitality management'],
		['title' =>'Transplantation - Surgery'],
		['title' =>'Transplantation immunology'],
		['title' =>'Transport economics'],
		['title' =>'Ultrafast optics'],
		['title' =>'Urban sociology'],
		['title' =>'Urology'],
		['title' =>'Veterinary sciences'],
		['title' =>'Virology'],
		['title' =>'Visual optics'],
		['title' =>'Visual arts'],
		['title' =>'Waste management'],
		['title' =>'Wireless communication'],
		['title' =>'X-ray optics'],
		['title' =>'Zoology'],
		['title' =>'Mycology'],
		['title' =>'Toxicology'],
		['title' =>'Financial economics'],
		['title' =>'Industrial organization'],
		['title' =>'Phylogenetics'],
		['title' =>'Actuarial science'],
		['title' =>'Game theory'],
		['title' =>'Marginalization'],
		['title' =>'Sociological theory'],
		['title' =>'Sociology of health'],
		['title' =>'Sociology of immigration'],
		['title' =>'Social conflict'],
		['title' =>'Sociology of the family'],
		['title' =>'Remedial education'],
		['title' =>'Materials chemistry'],
		['title' =>'Colloids'],
		['title' =>'Natural product chemistry'],
		['title' =>'Photonics'],
		['title' =>'Environmental economics'],
		['title' =>'Health economics'],
		['title' =>'Neuroendocrinology'],
		['title' =>'Neuropharmacology'],
		['title' =>'Neurophysiology'],
		['title' =>'Sleep disorders'],
		['title' =>'Stroke - Neurology'],
		['title' =>'Allergies - Clinical'],
		['title' =>'Metal implants'],
		['title' =>'Structural materials'],
		['title' =>'Fibers'],
		['title' =>'Eating behaviors'],
		['title' =>'Patient education'],
		['title' =>'Financial risk management'],
		['title' =>'Questionnaires/Surveys'],
		['title' =>'Bioremediation'],
		['title' =>'Aerosol science'],
		['title' =>'Indoor air quality'],
		['title' =>'Environmental engineering'],
		['title' =>'Life cycle assessment'],
		['title' =>'Energy conservation'],
		['title' =>'Energy in buildings'],
		['title' =>'Energy resource technologies'],
		['title' =>'Nuclear energy'],
		['title' =>'Electronic component fabrication'],
		['title' =>'Biodiversity'],
		['title' =>'Wildlife conservation'],
		['title' =>'Engineering geology'],
		['title' =>'Geochemistry'],
		['title' =>'Stratigraphy'],
		['title' =>'Volcanology'],
		['title' =>'Architectural aesthetics'],
		['title' =>'Fashion design'],
		['title' =>'Product aesthetics'],
		['title' =>'Memory disorders'],
		['title' =>'Lab on a chip'],
		['title' =>'Organic pollutant removal'],
		['title' =>'Stroke - Cardiology'],
		['title' =>'Business policy'],
		['title' =>'Corporate governance'],
		['title' =>'Corporate social responsibility'],
		['title' =>'Entrepreneurship'],
		['title' =>'Mergers and acquisitions'],
		['title' =>'Technology management'],
		['title' =>'Biosensors'],
		['title' =>'Curatorial studies'],
		['title' =>'Imaging physics'],
		['title' =>'Photovoltaics'],
		['title' =>'Spintronics'],
		['title' =>'Farmland ecology'],
		['title' =>'Livestock science'],
		['title' =>'Pest management'],
		['title' =>'Weed management'],
		['title' =>'African music'],
		['title' =>'African-American music'],
		['title' =>'American drama'],
		['title' =>'American music'],
		['title' =>'Antiques'],
		['title' =>'Antiquities'],
		['title' =>'Art collecting'],
		['title' =>'Art criticism'],
		['title' =>'Arts'],
		['title' =>'Arts education'],
		['title' =>'Bands'],
		['title' =>'British drama'],
		['title' =>'Choral music'],
		['title' =>'Classical music'],
		['title' =>'Community music'],
		['title' =>'Crafts'],
		['title' =>'Dance'],
		['title' =>'Digital music'],
		['title' =>'Disc jockeying'],
		['title' =>'Drama'],
		['title' =>'Early music'],
		['title' =>'Electronic music'],
		['title' =>'Experimental music'],
		['title' =>'Folk dance'],
		['title' =>'Folk music'],
		['title' =>'Jazz'],
		['title' =>'Keyboard instruments'],
		['title' =>'Liberal arts education'],
		['title' =>'Museum management'],
		['title' =>'Music collecting'],
		['title' =>'Music composition'],
		['title' =>'Music education'],
		['title' =>'Music theory'],
		['title' =>'Musicology'],
		['title' =>'Opera'],
		['title' =>'Photography'],
		['title' =>'Popular music'],
		['title' =>'Sound recording preservation'],
		['title' =>'Stage production'],
		['title' =>'Textile arts'],
		['title' =>'Theater history'],
		['title' =>'Visual arts education'],
		['title' =>'World music'],
		['title' =>'Pottery design'],
		['title' =>'Decorative arts'],
		['title' =>'Gardens'],
		['title' =>'Graphic arts'],
		['title' =>'Home and lifestyle'],
		['title' =>'Home decor'],
		['title' =>'Interior design'],
		['title' =>'Water gardens'],
		['title' =>'Academic analytics'],
		['title' =>'Biography'],
		['title' =>'Paranormal phenomena'],
		['title' =>'Public speaking'],
		['title' =>'Speech communication'],
		['title' =>'Athletic training'],
		['title' =>'Books'],
		['title' =>'Celebrities'],
		['title' =>'Communication theory'],
		['title' =>'Electronic publishing'],
		['title' =>'Fashion'],
		['title' =>'Film studies'],
		['title' =>'Film criticism'],
		['title' =>'Film history'],
		['title' =>'Film music'],
		['title' =>'Food'],
		['title' =>'Humor'],
		['title' =>'Internet research'],
		['title' =>'Investigative journalism'],
		['title' =>'Journalism'],
		['title' =>'Martial arts'],
		['title' =>'Media literacy'],
		['title' =>'Media studies'],
		['title' =>'News'],
		['title' =>'Outdoor recreation'],
		['title' =>'Periodical publishing industry'],
		['title' =>'Publishing industry'],
		['title' =>'Soccer'],
		['title' =>'Social networks'],
		['title' =>'Technical communication'],
		['title' =>'Television studies'],
		['title' =>'Visual communication'],
		['title' =>'Wine and wineries'],
		['title' =>'Amino acids'],
		['title' =>'Biomolecules'],
		['title' =>'Carbohydrates'],
		['title' =>'Clinical biochemistry'],
		['title' =>'Enzymes'],
		['title' =>'Glycobiology'],
		['title' =>'Lipids'],
		['title' =>'Metabolism'],
		['title' =>'Nucleic acids'],
		['title' =>'Proteins and peptides'],
		['title' =>'Proteomics'],
		['title' =>'Cytogenetics'],
		['title' =>'Genomics'],
		['title' =>'Immunogenetics'],
		['title' =>'Molecular genetics'],
		['title' =>'Antigens'],
		['title' =>'Bacteriophage'],
		['title' =>'Clinical immunology'],
		['title' =>'Clinical microbiology'],
		['title' =>'Immunoassay'],
		['title' =>'Immunochemistry'],
		['title' =>'Molecular virology'],
		['title' =>'Retrovirology'],
		['title' =>'Antioxidants and oxidative stress'],
		['title' =>'Biological markers'],
		['title' =>'Cell aging'],
		['title' =>'Chronobiology'],
		['title' =>'Cryobiology'],
		['title' =>'Enology'],
		['title' =>'Liposomes'],
		['title' =>'Molecular evolution'],
		['title' =>'Xenobiology'],
		['title' =>'Biological systems engineering'],
		['title' =>'Agribusiness'],
		['title' =>'Airport management'],
		['title' =>'Arms and defense'],
		['title' =>'Business/personal communication'],
		['title' =>'Business competition'],
		['title' =>'Business education'],
		['title' =>'Business ethics'],
		['title' =>'Business history'],
		['title' =>'Business intelligence'],
		['title' =>'Case management'],
		['title' =>'Casino and gaming management'],
		['title' =>'Commercial law'],
		['title' =>'Construction and building'],
		['title' =>'Consumer goods industry'],
		['title' =>'Consumer protection and product reviews'],
		['title' =>'Cooperative organizations'],
		['title' =>'Corporate law'],
		['title' =>'Crisis management'],
		['title' =>'Customer service'],
		['title' =>'Distribution'],
		['title' =>'Employee benefits'],
		['title' =>'Employee performance evaluation'],
		['title' =>'Employee selection'],
		['title' =>'Event planning'],
		['title' =>'Exports and imports'],
		['title' =>'Farm management'],
		['title' =>'Financial crisis management'],
		['title' =>'Franchise law'],
		['title' =>'Hospitality industry'],
		['title' =>'Industrial research'],
		['title' =>'Innovation management'],
		['title' =>'International business'],
		['title' =>'Inventory management and control'],
		['title' =>'Knowledge management'],
		['title' =>'Leadership'],
		['title' =>'Nonprofit organization administration'],
		['title' =>'Operations research'],
		['title' =>'Outsourcing and offshoring'],
		['title' =>'Production management'],
		['title' =>'Public relations'],
		['title' =>'Quality management'],
		['title' =>'Small business'],
		['title' =>'Sports marketing'],
		['title' =>'Strategic management'],
		['title' =>'Sustainable business'],
		['title' =>'Banking law'],
		['title' =>'Investing'],
		['title' =>'Bankruptcy law'],
		['title' =>'Casualty insurance'],
		['title' =>'Central banking'],
		['title' =>'Estate planning'],
		['title' =>'Financial advising'],
		['title' =>'Financial markets'],
		['title' =>'Financial mathematics'],
		['title' =>'Financial regulation'],
		['title' =>'Financial technology'],
		['title' =>'Humanitarian funding'],
		['title' =>'Humanitarian relief'],
		['title' =>'Insurance law'],
		['title' =>'National health insurance'],
		['title' =>'Personal finance'],
		['title' =>'Philanthropy'],
		['title' =>'Property tax'],
		['title' =>'Public finance'],
		['title' =>'Securities'],
		['title' =>'Tax law'],
		['title' =>'Calorimetry'],
		['title' =>'Chromatography'],
		['title' =>'Mass spectrometry'],
		['title' =>'Combustion'],
		['title' =>'Cosmetics chemistry'],
		['title' =>'Petrochemistry'],
		['title' =>'Separation and purification techniques'],
		['title' =>'Green chemistry'],
		['title' =>'Heterocyclic chemistry'],
		['title' =>'Organometallic chemistry'],
		['title' =>'Adsorption'],
		['title' =>'Astrochemistry'],
		['title' =>'Chemical kinetics'],
		['title' =>'Cheminformatics'],
		['title' =>'Cosmochemistry'],
		['title' =>'Dispersion chemistry'],
		['title' =>'Electrophoresis'],
		['title' =>'Femtochemistry'],
		['title' =>'Isotopes'],
		['title' =>'Mechanochemistry'],
		['title' =>'Molecular mechanics'],
		['title' =>'Sonochemistry'],
		['title' =>'Systems chemistry'],
		['title' =>'Thermochemistry'],
		['title' =>'Automated reasoning'],
		['title' =>'Cellular automata'],
		['title' =>'Chaos theory'],
		['title' =>'Dynamic programming'],
		['title' =>'Finite element analysis'],
		['title' =>'Fractals'],
		['title' =>'Linear programming'],
		['title' =>'Coding theory'],
		['title' =>'Compilers'],
		['title' =>'Computational complexity theory'],
		['title' =>'Concurrent programming'],
		['title' =>'Fault-tolerant computing'],
		['title' =>'Formal verification'],
		['title' =>'Functional programming'],
		['title' =>'Imperative programming'],
		['title' =>'Logic programming'],
		['title' =>'Object-oriented programming'],
		['title' =>'Ontology'],
		['title' =>'Program semantics'],
		['title' =>'Supercomputing'],
		['title' =>'Natural computation'],
		['title' =>'Virtual reality'],
		['title' =>'Discrete mathematics'],
		['title' =>'Graph theory'],
		['title' =>'Group theory'],
		['title' =>'Knot theory'],
		['title' =>'Mathematical logic'],
		['title' =>'Mathematical wavelets'],
		['title' =>'Model theory'],
		['title' =>'Proof theory'],
		['title' =>'Recursion theory'],
		['title' =>'Sampling theory'],
		['title' =>'Set theory'],
		['title' =>'Symbolic logic'],
		['title' =>'Type theory'],
		['title' =>'Multimedia and hypermedia'],
		['title' =>'Climate change'],
		['title' =>'Gemology'],
		['title' =>'Geomorphology'],
		['title' =>'Glaciology'],
		['title' =>'Hydrogeology'],
		['title' =>'Palynology'],
		['title' =>'Sedimentology'],
		['title' =>'Speleology'],
		['title' =>'Land surveying'],
		['title' =>'Navigation'],
		['title' =>'Meteoroids'],
		['title' =>'Capitalism'],
		['title' =>'Electric power'],
		['title' =>'Household economics'],
		['title' =>'Human services'],
		['title' =>'Poverty'],
		['title' =>'Public-Private partnership'],
		['title' =>'Resource economics'],
		['title' =>'Welfare economics'],
		['title' =>'Emissions trading'],
		['title' =>'Social choice theory'],
		['title' =>'Academic testing'],
		['title' =>'Adult education'],
		['title' =>'Career guidance'],
		['title' =>'Comparative education'],
		['title' =>'Computer-assisted instruction'],
		['title' =>'Distance education'],
		['title' =>'Early childhood education'],
		['title' =>'Education history'],
		['title' =>'Education law'],
		['title' =>'Education policy'],
		['title' =>'Education reform'],
		['title' =>'Educational effectiveness'],
		['title' =>'Educational facilities'],
		['title' =>'Educational innovation'],
		['title' =>'Educational technology'],
		['title' =>'Elementary education'],
		['title' =>'Ethics education'],
		['title' =>'Experiential education'],
		['title' =>'Higher education'],
		['title' =>'Inclusive education'],
		['title' =>'International education'],
		['title' =>'Learning'],
		['title' =>'Literacy'],
		['title' =>'Middle school education'],
		['title' =>'Rural education'],
		['title' =>'Secondary education'],
		['title' =>'Teacher education'],
		['title' =>'Teaching'],
		['title' =>'Urban education'],
		['title' =>'Foreign language learning'],
		['title' =>'Electronic packaging'],
		['title' =>'Integrated circuits'],
		['title' =>'Liquid crystal electronics'],
		['title' =>'Power electronics'],
		['title' =>'Power engineering'],
		['title' =>'Semiconductors'],
		['title' =>'Sound equipment'],
		['title' =>'VLSI design'],
		['title' =>'Satellite communication'],
		['title' =>'Television broadcasting'],
		['title' =>'Bridge construction'],
		['title' =>'Earthquake engineering'],
		['title' =>'Ecological engineering'],
		['title' =>'Heating, ventilation, and air conditioning'],
		['title' =>'Mining engineering'],
		['title' =>'Road construction'],
		['title' =>'Space frame structures'],
		['title' =>'Traffic engineering'],
		['title' =>'Electromechanics'],
		['title' =>'Hydraulic engineering'],
		['title' =>'Instrumentation engineering'],
		['title' =>'Pneumatics'],
		['title' =>'Astronautics engineering'],
		['title' =>'Continuum mechanics'],
		['title' =>'Fluid mechanics'],
		['title' =>'Fracture mechanics'],
		['title' =>'Heat and mass transport'],
		['title' =>'Laboratory automation'],
		['title' =>'Mechatronics'],
		['title' =>'Weapons systems'],
		['title' =>'Biomass energy'],
		['title' =>'Distributed power generation'],
		['title' =>'Coastal management'],
		['title' =>'Environmental technology'],
		['title' =>'Land management'],
		['title' =>'Natural resource management'],
		['title' =>'Recreation ecology'],
		['title' =>'Industrial archaeology'],
		['title' =>'Paleobiology'],
		['title' =>'Paleontology'],
		['title' =>'African history'],
		['title' =>'African-American history'],
		['title' =>'American Civil War'],
		['title' =>'Ancient history'],
		['title' =>'Asian history'],
		['title' =>'British history'],
		['title' =>'Canadian history'],
		['title' =>'Central European history'],
		['title' =>'Cultural heritage'],
		['title' =>'Early modern history'],
		['title' =>'Egyptology'],
		['title' =>'Eighteenth-century history'],
		['title' =>'European history'],
		['title' =>'French history'],
		['title' =>'German history'],
		['title' =>'Historic preservation'],
		['title' =>'Historical consciousness'],
		['title' =>'Holocaust studies'],
		['title' =>'Israeli history'],
		['title' =>'Japanese history'],
		['title' =>'Latin American history'],
		['title' =>'Local history'],
		['title' =>'Middle Ages'],
		['title' =>'Modern history'],
		['title' =>'Nineteenth-century history'],
		['title' =>'Prehistory'],
		['title' =>'Renaissance history'],
		['title' =>'Russian history'],
		['title' =>'Scandinavian history'],
		['title' =>'Social history'],
		['title' =>'South American history'],
		['title' =>'Twentieth-century history'],
		['title' =>'United States history'],
		['title' =>'Victorian Era'],
		['title' =>'Women\'s history'],
		['title' =>'World War II'],
		['title' =>'Administrative law'],
		['title' =>'Agricultural law'],
		['title' =>'Antitrust law'],
		['title' =>'Appellate law'],
		['title' =>'Arbitration'],
		['title' =>'Heritage law'],
		['title' =>'Civil law'],
		['title' =>'Common law'],
		['title' =>'Community development law'],
		['title' =>'Comparative law'],
		['title' =>'Constitutional law'],
		['title' =>'Consumer rights law'],
		['title' =>'Contracts'],
		['title' =>'Courts'],
		['title' =>'Criminal law'],
		['title' =>'Cyber law'],
		['title' =>'Discrimination law'],
		['title' =>'Employment law'],
		['title' =>'Energy law'],
		['title' =>'Entertainment law'],
		['title' =>'Environmental law'],
		['title' =>'Equal opportunity law'],
		['title' =>'European law'],
		['title' =>'Evidence law'],
		['title' =>'Family court'],
		['title' =>'Family law'],
		['title' =>'Human rights law'],
		['title' =>'Intellectual property law'],
		['title' =>'Islamic law'],
		['title' =>'Jurisprudence'],
		['title' =>'Juvenile corrections'],
		['title' =>'Law enforcement'],
		['title' =>'Legal history'],
		['title' =>'Maritime law'],
		['title' =>'Natural law'],
		['title' =>'Property law'],
		['title' =>'Public interest law'],
		['title' =>'Sports law'],
		['title' =>'State courts'],
		['title' =>'American philosophy'],
		['title' =>'Analytic philosophy'],
		['title' =>'Ancient philosophy'],
		['title' =>'Bioethics'],
		['title' =>'Chinese philosophy'],
		['title' =>'Consciousness'],
		['title' =>'Critical theory'],
		['title' =>'Existentialism'],
		['title' =>'German philosophy'],
		['title' =>'Hermeneutics'],
		['title' =>'Humanism'],
		['title' =>'Metaphysics'],
		['title' =>'Modern philosophy'],
		['title' =>'Natural philosophy'],
		['title' =>'Phenomenology'],
		['title' =>'Philosophy history'],
		['title' =>'Religious freedom'],
		['title' =>'Russian philosophy'],
		['title' =>'Skepticism'],
		['title' =>'Social ethics'],
		['title' =>'Universalism'],
		['title' =>'African-American studies'],
		['title' =>'Agrarianism'],
		['title' =>'American studies'],
		['title' =>'Asian studies'],
		['title' =>'Asian-American studies'],
		['title' =>'Chinese studies'],
		['title' =>'Civil wars'],
		['title' =>'Cold War'],
		['title' =>'Communism'],
		['title' =>'Conservatism'],
		['title' =>'Constructivism'],
		['title' =>'Democracy'],
		['title' =>'Former Soviet Republics'],
		['title' =>'Interfaith relations'],
		['title' =>'Israeli-Palestinian conflict'],
		['title' =>'Japanese studies'],
		['title' =>'Korean studies'],
		['title' =>'Libertarianism'],
		['title' =>'Local politics'],
		['title' =>'Military history'],
		['title' =>'Military policy'],
		['title' =>'Nationalism'],
		['title' =>'Naval history'],
		['title' =>'Northeast Asia studies'],
		['title' =>'Nuclear weapons'],
		['title' =>'Organized labor'],
		['title' =>'Peace studies'],
		['title' =>'Political anthropology'],
		['title' =>'Political campaigns'],
		['title' =>'Political commentary'],
		['title' =>'Political economy'],
		['title' =>'Political psychology'],
		['title' =>'Political sociology'],
		['title' =>'Politics'],
		['title' =>'Elections'],
		['title' =>'Presidential studies'],
		['title' =>'Public opinion'],
		['title' =>'Terrorism'],
		['title' =>'Totalitarianism'],
		['title' =>'United States Congress'],
		['title' =>'United States politics'],
		['title' =>'War'],
		['title' =>'State policy'],
		['title' =>'Adventism'],
		['title' =>'Anglicanism'],
		['title' =>'Baptist Church'],
		['title' =>'Buddhism'],
		['title' =>'Catholic education'],
		['title' =>'Catholicism'],
		['title' =>'Christian ethics'],
		['title' =>'Christian evangelism'],
		['title' =>'Christian ministry'],
		['title' =>'Christian preaching'],
		['title' =>'Christian studies'],
		['title' =>'Christianity'],
		['title' =>'Congregationalism'],
		['title' =>'Franciscanism'],
		['title' =>'Hinduism'],
		['title' =>'History of Christianity'],
		['title' =>'History of Judaism'],
		['title' =>'History of religions'],
		['title' =>'Islam'],
		['title' =>'Judaism'],
		['title' =>'Lutheran Church'],
		['title' =>'Methodist Church'],
		['title' =>'Monasticism'],
		['title' =>'Mormonism'],
		['title' =>'Mysticism'],
		['title' =>'Mythology'],
		['title' =>'New Testament studies'],
		['title' =>'Old Testament studies'],
		['title' =>'Orthodox Christianity'],
		['title' =>'Paganism'],
		['title' =>'Patristics'],
		['title' =>'Pentecostalism'],
		['title' =>'Presbyterianism'],
		['title' =>'Protestant Reformation'],
		['title' =>'Protestantism'],
		['title' =>'Religious psychology'],
		['title' =>'Sikhism'],
		['title' =>'Indigenous languages'],
		['title' =>'Language translation'],
		['title' =>'Medieval language'],
		['title' =>'Multilingual education'],
		['title' =>'Multilingualism'],
		['title' =>'Semiotics'],
		['title' =>'African literature'],
		['title' =>'African-American literature'],
		['title' =>'American literature'],
		['title' =>'British literature'],
		['title' =>'Canadian literature'],
		['title' =>'Children\'s literature'],
		['title' =>'Dialogism'],
	];
	DB::table('subjectarea')->insert($subject_area_seeder);
    }
}
