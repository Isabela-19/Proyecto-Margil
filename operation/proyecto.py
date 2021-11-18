class Factura:
    __iva=19

    def __init__(self):
        self.cantidad=[]
        self.precio=[]
        self.total=[]
        self.cambio=[]


    def MostrarProd(self):
        self.cantidad=int(input("Ingrese la cantidad de productos:"))
        print(" ")

    def Precio(self):
        self.precio=int(input("Digite el precio:"))
        print(" ")

    def total_pagar(self):
        self.total = self.cantidad * self.precio
        impuesto = self.total * Factura.__iva / 100
        return(self.total + impuesto)

    def Mostcambio(self):
        self.cambio = int(input("Ingrese el la cantidad de dinero con la que va a pagar: $"))
        diferencia = self.cambio - self.total
        return(self.cambio)
        print(" ")

    def mostrarFac(self):
        print("FACTURA")
        print(" ")
        print("Cantidad de productos: ",self.cantidad)
        print("Precio total: $",self.total)
        print("Cambio: $",self.cambio)
        
factura = Factura()

factura.MostrarProd()
factura.Precio()
factura.total_pagar()
factura.Mostcambio()
factura.mostrarFac()