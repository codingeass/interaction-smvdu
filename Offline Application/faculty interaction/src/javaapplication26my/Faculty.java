/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package javaapplication26my;

import java.beans.PropertyChangeListener;
import java.beans.PropertyChangeSupport;
import java.io.Serializable;
import java.util.Date;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import javax.persistence.Transient;

/**
 *
 * @author Amandeep
 */
@Entity
@Table(name = "faculty", catalog = "interaction", schema = "")
@NamedQueries({
    @NamedQuery(name = "Faculty.findAll", query = "SELECT f FROM Faculty f"),
    @NamedQuery(name = "Faculty.findById", query = "SELECT f FROM Faculty f WHERE f.id = :id"),
    @NamedQuery(name = "Faculty.findByName", query = "SELECT f FROM Faculty f WHERE f.name = :name"),
    @NamedQuery(name = "Faculty.findBySex", query = "SELECT f FROM Faculty f WHERE f.sex = :sex"),
    @NamedQuery(name = "Faculty.findByDesignation", query = "SELECT f FROM Faculty f WHERE f.designation = :designation"),
    @NamedQuery(name = "Faculty.findByDepartment", query = "SELECT f FROM Faculty f WHERE f.department = :department"),
    @NamedQuery(name = "Faculty.findByQualification", query = "SELECT f FROM Faculty f WHERE f.qualification = :qualification"),
    @NamedQuery(name = "Faculty.findByDateOfBirth", query = "SELECT f FROM Faculty f WHERE f.dateOfBirth = :dateOfBirth"),
    @NamedQuery(name = "Faculty.findByDateOfJoining", query = "SELECT f FROM Faculty f WHERE f.dateOfJoining = :dateOfJoining"),
    @NamedQuery(name = "Faculty.findByAddress", query = "SELECT f FROM Faculty f WHERE f.address = :address"),
    @NamedQuery(name = "Faculty.findByContact", query = "SELECT f FROM Faculty f WHERE f.contact = :contact"),
    @NamedQuery(name = "Faculty.findByProject", query = "SELECT f FROM Faculty f WHERE f.project = :project"),
    @NamedQuery(name = "Faculty.findByAreaOfInterest", query = "SELECT f FROM Faculty f WHERE f.areaOfInterest = :areaOfInterest"),
    @NamedQuery(name = "Faculty.findByAreaOfSpecialization", query = "SELECT f FROM Faculty f WHERE f.areaOfSpecialization = :areaOfSpecialization")})
public class Faculty implements Serializable {
    @Transient
    private PropertyChangeSupport changeSupport = new PropertyChangeSupport(this);
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "id")
    private Integer id;
    @Column(name = "name")
    private String name;
    @Column(name = "sex")
    private String sex;
    @Column(name = "designation")
    private String designation;
    @Column(name = "department")
    private String department;
    @Column(name = "qualification")
    private String qualification;
    @Column(name = "date_of_birth")
    @Temporal(TemporalType.DATE)
    private Date dateOfBirth;
    @Column(name = "date_of_joining")
    @Temporal(TemporalType.DATE)
    private Date dateOfJoining;
    @Column(name = "address")
    private String address;
    @Column(name = "contact")
    private String contact;
    @Column(name = "project")
    private String project;
    @Column(name = "area_of_interest")
    private String areaOfInterest;
    @Column(name = "area_of_specialization")
    private String areaOfSpecialization;

    public Faculty() {
    }

    public Faculty(Integer id) {
        this.id = id;
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        Integer oldId = this.id;
        this.id = id;
        changeSupport.firePropertyChange("id", oldId, id);
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        String oldName = this.name;
        this.name = name;
        changeSupport.firePropertyChange("name", oldName, name);
    }

    public String getSex() {
        return sex;
    }

    public void setSex(String sex) {
        String oldSex = this.sex;
        this.sex = sex;
        changeSupport.firePropertyChange("sex", oldSex, sex);
    }

    public String getDesignation() {
        return designation;
    }

    public void setDesignation(String designation) {
        String oldDesignation = this.designation;
        this.designation = designation;
        changeSupport.firePropertyChange("designation", oldDesignation, designation);
    }

    public String getDepartment() {
        return department;
    }

    public void setDepartment(String department) {
        String oldDepartment = this.department;
        this.department = department;
        changeSupport.firePropertyChange("department", oldDepartment, department);
    }

    public String getQualification() {
        return qualification;
    }

    public void setQualification(String qualification) {
        String oldQualification = this.qualification;
        this.qualification = qualification;
        changeSupport.firePropertyChange("qualification", oldQualification, qualification);
    }

    public Date getDateOfBirth() {
        return dateOfBirth;
    }

    public void setDateOfBirth(Date dateOfBirth) {
        Date oldDateOfBirth = this.dateOfBirth;
        this.dateOfBirth = dateOfBirth;
        changeSupport.firePropertyChange("dateOfBirth", oldDateOfBirth, dateOfBirth);
    }

    public Date getDateOfJoining() {
        return dateOfJoining;
    }

    public void setDateOfJoining(Date dateOfJoining) {
        Date oldDateOfJoining = this.dateOfJoining;
        this.dateOfJoining = dateOfJoining;
        changeSupport.firePropertyChange("dateOfJoining", oldDateOfJoining, dateOfJoining);
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        String oldAddress = this.address;
        this.address = address;
        changeSupport.firePropertyChange("address", oldAddress, address);
    }

    public String getContact() {
        return contact;
    }

    public void setContact(String contact) {
        String oldContact = this.contact;
        this.contact = contact;
        changeSupport.firePropertyChange("contact", oldContact, contact);
    }

    public String getProject() {
        return project;
    }

    public void setProject(String project) {
        String oldProject = this.project;
        this.project = project;
        changeSupport.firePropertyChange("project", oldProject, project);
    }

    public String getAreaOfInterest() {
        return areaOfInterest;
    }

    public void setAreaOfInterest(String areaOfInterest) {
        String oldAreaOfInterest = this.areaOfInterest;
        this.areaOfInterest = areaOfInterest;
        changeSupport.firePropertyChange("areaOfInterest", oldAreaOfInterest, areaOfInterest);
    }

    public String getAreaOfSpecialization() {
        return areaOfSpecialization;
    }

    public void setAreaOfSpecialization(String areaOfSpecialization) {
        String oldAreaOfSpecialization = this.areaOfSpecialization;
        this.areaOfSpecialization = areaOfSpecialization;
        changeSupport.firePropertyChange("areaOfSpecialization", oldAreaOfSpecialization, areaOfSpecialization);
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Faculty)) {
            return false;
        }
        Faculty other = (Faculty) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "javaapplication26my.Faculty[ id=" + id + " ]";
    }

    public void addPropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.addPropertyChangeListener(listener);
    }

    public void removePropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.removePropertyChangeListener(listener);
    }
    
}
