ok aplicacion de agendados de cita ...

necesitamos usuario principal que se logueee 
    user (roles)
        admin (yo)
        doctores 
    
-- entidades
    user (ya esta)
    doctores (id, dni, nombres, ubicacion, especialidad, disponibilidad(rango fechas))
    tipo_consulta (id, tipo_consulta, precio)
    pacientes  (id, nombres, telefono, dni, tipo_consulta_id)
    cita medica (doctor_id, paciente_id,  fecha_hora, estado, notas_ai)

