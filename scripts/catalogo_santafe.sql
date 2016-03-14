INSERT INTO `catalogo` (`id_catalogo`, `cuenta_contable`, `descripcion`, `nivel`, `condicion`) VALUES

(NULL, '1.00.00.00.000', 'ACTIVO', 1, 'Activo'),
(NULL, '1.01.00.00.000', 'ACTIVO CIRCULANTE', 2, 'Activo'),
(NULL, '1.01.01.00.000', 'Activo disponible', 3, 'Activo'),
(NULL, '1.01.01.01.000', 'Caja', 4, 'Activo'),
(NULL, '1.01.01.02.000', 'Banco', 4, 'Activo'),

(NULL, '1.01.02.00.000', 'Activo exigible', 3, 'Activo'),
(NULL, '1.01.02.01.000', 'Cuentas por Cobrar Propiedad', 4, 'Activo'),
(NULL, '1.01.02.01.001', 'Cuentas por Cobrar Propiedad No.1', 5, 'Activo'),
(NULL, '1.01.02.03.000', 'Efectos por Cobrar', 4, 'Activo'),
(NULL, '1.01.02.06.000', 'Anticipos a Proveedores', 4, 'Activo'),
(NULL, '1.01.02.07.000', 'Anticipos a Contratistas', 4, 'Activo'),

(NULL, '1.01.03.00.000', 'Activo realizable', 3, 'Activo'),
(NULL, '1.01.03.07.000', 'Inventario de materiales y suministros de oficinas', 3, 'Activo'),

(NULL, '1.02.00.00.000', 'ACTIVO NO CIRCULANTE', 2, 'Activo'),
(NULL, '1.02.03.00.000', 'Activo Fijo', 3, 'Activo'),
(NULL, '1.02.03.01.000', 'Terrenos', 4, 'Activo'),
(NULL, '1.02.03.02.000', 'Edificios y Construcciones', 4, 'Activo'),
(NULL, '1.02.03.03.000', 'Instalaciones', 4, 'Activo'),
(NULL, '1.02.03.04.000', 'Maquinarias y equipos', 4, 'Activo'),
(NULL, '1.02.03.04.005', 'Equipos de comunicaciones y senalamiento', 5, 'Activo'),
(NULL, '1.02.03.04.009', 'Maquinas, muebles y demas equipos de oficina', 5, 'Activo'),
(NULL, '1.02.03.09.000', 'Obras civiles', 5, 'Activo'),

(NULL, '1.02.04.00.000', 'Activo Intangible', 3, 'Activo'),
(NULL, '1.02.04.01.000', 'Estudios y Proyectos', 4, 'Activo'),

(NULL, '1.02.05.00.000', 'Otros activos no circulantes', 3, 'Activo'),
(NULL, '1.02.05.02.000', 'Activos en gestion judicial', 4, 'Activo'),
(NULL, '1.02.05.03.000', 'Gastos Pagados por anticipado', 4, 'Activo'),
(NULL, '1.02.05.04.000', 'Anticipos Contratista Largo Plazo', 4, 'Activo'),
(NULL, '1.02.05.05.000', 'Anticipos Proveedor Largo plazo', 4, 'Activo'),

(NULL, '2.00.00.00.000', 'PASIVO', 1, 'Activo'),
(NULL, '2.01.00.00.000', 'PASIVO CIRCULANTE', 2, 'Activo'),
(NULL, '2.01.01.00.000', 'Cuentas a pagar', 3, 'Activo'),
(NULL, '2.01.01.01.000', 'Provedores', 4, 'Activo'),
(NULL, '2.01.01.02.000', 'Contratistas', 4, 'Activo'),
(NULL, '2.01.01.09.000', 'Impuestos indirectos a pagar', 4, 'Activo'),
(NULL, '2.01.01.99.000', 'Otras cuentas a pagar', 4, 'Activo'),

(NULL, '2.02.00.00.000', 'PASIVO NO CIRCLANTE', 2, 'Activo'),
(NULL, '2.02.01.00.000', 'Documento y Efectos a pagar', 4, 'Activo'),
(NULL, '2.02.01.01.000', 'Efectos a pagar Proveedores', 4, 'Activo'),
(NULL, '2.02.01.02.000', 'Efectos a pagar Contratistas', 4, 'Activo'),

(NULL, '3.00.00.00.000', 'RECURSOS', 1, 'Activo'),
(NULL, '3.05.00.00.000', 'TRANSFERENCIAS', 2, 'Activo'),
(NULL, '3.05.01.00.000', 'Transfrencias para financiar gastos corrientes', 3, 'Activo'),
(NULL, '3.05.01.01.000', 'Transferencias Sector privado', 4, 'Activo'),
(NULL, '3.05.01.01.001', 'Unidad familiar propiedad No.1', 5, 'Activo'),


(NULL, '4.00.00.00.000', 'EGRESOS', 1, 'Activo'),
(NULL, '4.02.00.00.000', 'MATERIALES Y SUMINISTROS', 2, 'Activo'),
(NULL, '4.02.01.00.000', 'Productos alimenticios y agropecuarios', 3, 'Activo'),
(NULL, '4.02.01.01.000', 'Alimentos y bebidas para personas', 4, 'Activo'),
(NULL, '4.02.01.02.000', 'Productos Agricola y Pecuarios', 4, 'Activo'),

(NULL, '4.02.02.00.000', 'Productos de minas y canteras', 3, 'Activo'),
(NULL, '4.02.02.05.000', 'Piedra, arcilla, arena y tierra', 4, 'Activo'),

(NULL, '4.02.05.00.000', 'Productos de papel, carton e impresos', 3, 'Activo'),
(NULL, '4.02.05.03.000', 'Productos de papel y carton para oficina', 4, 'Activo'),
(NULL, '4.02.05.07.000', 'Productos de papel y carton para computacion', 4, 'Activo'),

(NULL, '4.02.06.00.000', 'Productos quimicos y derivados', 3, 'Activo'),
(NULL, '4.02.06.02.000', 'Abonos plaguicidas y otros', 4, 'Activo'),
(NULL, '4.02.06.03.000', 'Tintas pinturas y colorantes', 4, 'Activo'),
(NULL, '4.02.06.06.000', 'Combustibles y lubricantes', 4, 'Activo'),
(NULL, '4.02.06.08.000', 'Productos plasticos', 4, 'Activo'),

(NULL, '4.02.07.00.000', 'Productos minerales no metalicos', 3, 'Activo'),
(NULL, '4.02.07.03.000', 'Productos de arcilla para construccion', 4, 'Activo'),
(NULL, '4.02.07.04.000', 'Cemento, cal y yeso', 4, 'Activo'),

(NULL, '4.02.08.00.000', 'Productos metalicos', 3, 'Activo'),
(NULL, '4.02.08.03.000', 'Herramientas menores y articulos de ferreteria', 4, 'Activo'),
(NULL, '4.02.08.04.000', 'Productos metalicos estructurales', 4, 'Activo'),

(NULL, '4.02.10.00.000', 'Productos varios y utiles diversos', 3, 'Activo'),
(NULL, '4.02.10.03.000', 'Materiales y uiles de limpieza y aseo', 4, 'Activo'),
(NULL, '4.02.10.12.000', 'Materiales electricos', 4, 'Activo'),
(NULL, '4.02.10.13.000', 'Materiales para instalaciones sanitarias', 4, 'Activo'),

(NULL, '4.03.00.00.000', 'SERVICIOS NO PERSONALES', 2, 'Activo'),
(NULL, '4.03.03.00.000', 'Servicios Basicos', 3, 'Activo'),
(NULL, '4.03.03.01.000', 'Electricidad', 4, 'Activo'),
(NULL, '4.03.03.02.000', 'Gas', 4, 'Activo'),
(NULL, '4.03.03.03.000', 'Agua', 4, 'Activo'),
(NULL, '4.03.03.04.000', 'Telefonos', 4, 'Activo'),
(NULL, '4.03.03.05.000', 'Servicios de Comunicacion', 4, 'Activo'),
(NULL, '4.03.03.06.000', 'Servicio de Aseo urbano y domiciliario', 4, 'Activo'),
(NULL, '4.03.03.99.000', 'Otros servicios basicos', 4, 'Activo'),

(NULL, '4.03.08.00.000', 'Servicios profesionales y tecnicos', 4, 'Activo'),
(NULL, '4.03.08.01.000', 'Servicios juridicos', 4, 'Activo'),
(NULL, '4.03.08.02.000', 'Servicios de contabilidad y auditoria', 4, 'Activo'),
(NULL, '4.03.08.10.000', 'Servicios de vigilancia', 4, 'Activo'),
(NULL, '4.03.08.99.000', 'Otros servicios profesionales y tecnicos', 4, 'Activo'),

